<?php

declare(strict_types=1);

namespace SergeKvashnin\RouterBenchmark\BenchmarkInstantiated;

use FastRoute\Dispatcher;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use PhpBench\Attributes\Warmup;
use function FastRoute\cachedDispatcher;

#[Revs(10000)]
#[Iterations(5)]
#[Warmup(2)]
final class FastRouteBench
{
    private Dispatcher $dispatcher;

    public function __construct()
    {
        $routing = require __DIR__ . '/../routes/fast_route_routes.php';
        $this->dispatcher = cachedDispatcher($routing, ['cacheFile' => __DIR__ . '/../../var/fast_route_cache']);
    }

    public function benchFirstRoute(): void
    {
        $this->dispatcher->dispatch('GET', '/users');
    }

    public function benchLastRoute(): void
    {
        $this->dispatcher->dispatch('POST', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete');
    }

    public function bench404(): void
    {
        $this->dispatcher->dispatch('GET', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete!');
    }
}
