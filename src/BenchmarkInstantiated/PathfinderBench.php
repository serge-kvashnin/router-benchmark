<?php

declare(strict_types=1);

namespace SergeKvashnin\RouterBenchmark\BenchmarkInstantiated;

use Norvica\Pathfinder\Cache;
use Norvica\Pathfinder\Pathfinder;
use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\Revs;
use PhpBench\Attributes\Warmup;

#[Revs(10000)]
#[Iterations(5)]
#[Warmup(2)]
final class PathfinderBench
{
    private Pathfinder $pathfinder;

    public function __construct()
    {
        $this->pathfinder = new Pathfinder();
        $routing = require __DIR__ . '/../routes/pathfinder_routes.php';
        $routing($this->pathfinder);

        $tree = $this->pathfinder->tree();
        (new Cache(__DIR__ . '/../../var/pathfinder_cache'))->write($tree);

        $tree = (new Cache(__DIR__ . '/../../var/pathfinder_cache'))->read();
        $this->pathfinder = new Pathfinder($tree);
    }

    public function benchFirstRoute(): void
    {
        $this->pathfinder->match('GET', '/users');
    }

    public function benchLastRoute(): void
    {
        $this->pathfinder->match('POST', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete');
    }

    public function bench404(): void
    {
        $this->pathfinder->match('GET', '/api/workflow/9999/stages/6666/tasks/3333/subtasks/1111/complete!');
    }
}
