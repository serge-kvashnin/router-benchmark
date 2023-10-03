<?php

declare(strict_types=1);

namespace SergeKvashnin\RouterBenchmark\BenchmarkWarm;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use PhpBench\Attributes\Warmup;
use function FastRoute\cachedDispatcher;

#[Revs(100)]
#[Iterations(5)]
#[Warmup(2)]
final class FastRouteBench
{
    public function __construct()
    {
        // allow cache to be created
        $routing = require __DIR__ . '/../routes/fast_route_routes.php';
        cachedDispatcher($routing, ['cacheFile' => __DIR__ . '/../../var/fast_route_cache']);
    }

    public function benchFirstRoute(): void
    {
        $routing = require __DIR__ . '/../routes/fast_route_routes.php';
        $router = cachedDispatcher($routing, ['cacheFile' => __DIR__ . '/../../var/fast_route_cache']);
        $router->dispatch('GET', '/users');
    }

    public function benchLastRoute(): void
    {
        $routing = require __DIR__ . '/../routes/fast_route_routes.php';
        $router = cachedDispatcher($routing, ['cacheFile' => __DIR__ . '/../../var/fast_route_cache']);
        $router->dispatch('POST', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete');
    }

    public function bench404(): void
    {
        $routing = require __DIR__ . '/../routes/fast_route_routes.php';
        $router = cachedDispatcher($routing, ['cacheFile' => __DIR__ . '/../../var/fast_route_cache']);
        $router->dispatch('GET', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete!');
    }
}
