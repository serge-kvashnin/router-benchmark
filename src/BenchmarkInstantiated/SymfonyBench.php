<?php

declare(strict_types=1);

namespace SergeKvashnin\RouterBenchmark\BenchmarkInstantiated;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use PhpBench\Attributes\Warmup;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\CompiledUrlMatcher;
use Symfony\Component\Routing\Matcher\Dumper\CompiledUrlMatcherDumper;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

#[Revs(10000)]
#[Iterations(5)]
#[Warmup(2)]
final class SymfonyBench
{
    private UrlMatcher $matcher;

    public function __construct()
    {
        $routes = new RouteCollection();
        $routing = require __DIR__ . '/../routes/symfony_routes.php';
        $routing($routes);

        $dumper = new CompiledUrlMatcherDumper($routes);
        $compiled = $dumper->getCompiledRoutes();

        file_put_contents(__DIR__ . '/../../var/symfony_cache', var_export($compiled, true));

        $cache = file_get_contents(__DIR__ . '/../../var/symfony_cache');
        $compiled = eval("return {$cache};");
        $context = new RequestContext();
        $this->matcher = new CompiledUrlMatcher($compiled, $context);
    }

    public function benchFirstRoute(): void
    {
        $this->matcher->setContext(new RequestContext(method: 'GET'));
        $this->matcher->match('/users');
    }

    public function benchLastRoute(): void
    {
        $this->matcher->setContext(new RequestContext(method: 'POST'));
        $this->matcher->match('/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete');
    }

    public function bench404(): void
    {
        $this->matcher->setContext(new RequestContext(method: 'DELETE'));
        try {
            $this->matcher->match('/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete!');
        } catch (ResourceNotFoundException) {
        }
    }
}
