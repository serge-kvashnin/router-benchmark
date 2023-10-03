<?php

declare(strict_types=1);

namespace SergeKvashnin\RouterBenchmark\BenchmarkWarm;

use Norvica\Pathfinder\Cache;
use Norvica\Pathfinder\Pathfinder;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use PhpBench\Attributes\Warmup;

#[Revs(100)]
#[Iterations(5)]
#[Warmup(2)]
final class PathfinderBench
{
    public function __construct()
    {
        $router = new Pathfinder();
        $routing = require __DIR__ . '/../routes/pathfinder_routes.php';
        $routing($router);

        $tree = $router->tree();
        (new Cache(__DIR__ . '/../../var/pathfinder_cache'))->write($tree);
    }

    public function benchFirstRoute(): void
    {
        $tree = (new Cache(__DIR__ . '/../../var/pathfinder_cache'))->read();
        $router = new Pathfinder($tree);

        $router->match('GET', '/users');
    }

    public function benchLastRoute(): void
    {
        $tree = (new Cache(__DIR__ . '/../../var/pathfinder_cache'))->read();
        $router = new Pathfinder($tree);

        $router->match('POST', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete');
    }

    public function bench404(): void
    {
        $tree = (new Cache(__DIR__ . '/../../var/pathfinder_cache'))->read();
        $router = new Pathfinder($tree);

        $router->match('GET', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete!');
    }
}
