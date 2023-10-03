<?php

declare(strict_types=1);

namespace SergeKvashnin\RouterBenchmark\BenchmarkCold;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use PhpBench\Attributes\Warmup;
use function FastRoute\simpleDispatcher;

#[Revs(100)]
#[Iterations(5)]
#[Warmup(2)]
final class FastRouteBench
{
    public function benchFirstRoute(): void
    {
        $routing = require __DIR__ . '/../routes/fast_route_routes.php';
        $router = simpleDispatcher($routing);
        $router->dispatch('GET', '/users');
    }

    public function benchLastRoute(): void
    {
        $routing = require __DIR__ . '/../routes/fast_route_routes.php';
        $router = simpleDispatcher($routing);
        $router->dispatch('POST', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete');
    }

    public function bench404(): void
    {
        $routing = require __DIR__ . '/../routes/fast_route_routes.php';
        $router = simpleDispatcher($routing);
        $router->dispatch('DELETE', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete');
    }
}
