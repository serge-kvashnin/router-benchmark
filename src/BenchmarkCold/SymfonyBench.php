<?php

declare(strict_types=1);

namespace SergeKvashnin\RouterBenchmark\BenchmarkCold;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use PhpBench\Attributes\Warmup;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

#[Revs(100)]
#[Iterations(5)]
#[Warmup(2)]
final class SymfonyBench
{
    public function benchFirstRoute(): void
    {
        $routes = new RouteCollection();
        $routing = require __DIR__ . '/../routes/symfony_routes.php';
        $routing($routes);
        $context = new RequestContext(method: 'GET');
        $router = new UrlMatcher($routes, $context);
        $router->match('/users');
    }

    public function benchLastRoute(): void
    {
        $routes = new RouteCollection();
        $routing = require __DIR__ . '/../routes/symfony_routes.php';
        $routing($routes);
        $context = new RequestContext(method: 'POST');
        $router = new UrlMatcher($routes, $context);
        $router->match('/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete');
    }

    public function bench404(): void
    {
        $routes = new RouteCollection();
        $routing = require __DIR__ . '/../routes/symfony_routes.php';
        $routing($routes);
        $context = new RequestContext(method: 'DELETE');
        $router = new UrlMatcher($routes, $context);
        try {
            $router->match('/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete!');
        } catch (ResourceNotFoundException) {
        }
    }
}
