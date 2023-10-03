<?php

declare(strict_types=1);

namespace SergeKvashnin\RouterBenchmark\BenchmarkWarm;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use PhpBench\Attributes\Warmup;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\CompiledUrlMatcher;
use Symfony\Component\Routing\Matcher\Dumper\CompiledUrlMatcherDumper;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

#[Revs(100)]
#[Iterations(5)]
#[Warmup(2)]
final class SymfonyBench
{
    public function __construct()
    {
        $routes = new RouteCollection();
        $routing = require __DIR__ . '/../routes/symfony_routes.php';
        $routing($routes);

        $dumper = new CompiledUrlMatcherDumper($routes);
        $compiled = $dumper->getCompiledRoutes();

        file_put_contents(__DIR__ . '/../../var/symfony_cache', var_export($compiled, true));
    }

    public function benchFirstRoute(): void
    {
        $cache = file_get_contents(__DIR__ . '/../../var/symfony_cache');
        $compiled = eval("return {$cache};");
        $context = new RequestContext(method: 'GET');
        $router = new CompiledUrlMatcher($compiled, $context);

        $router->match('/users');
    }

    public function benchLastRoute(): void
    {
        $cache = file_get_contents(__DIR__ . '/../../var/symfony_cache');
        $compiled = eval("return {$cache};");
        $context = new RequestContext(method: 'POST');
        $router = new CompiledUrlMatcher($compiled, $context);

        $router->match('/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete');
    }

    public function bench404(): void
    {
        $cache = file_get_contents(__DIR__ . '/../../var/symfony_cache');
        $compiled = eval("return {$cache};");
        $context = new RequestContext(method: 'DELETE');
        $router = new CompiledUrlMatcher($compiled, $context);

        try {
            $router->match('/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete!');
        } catch (ResourceNotFoundException) {
        }
    }
}
