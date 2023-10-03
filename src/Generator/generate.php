<?php

declare(strict_types=1);

use SergeKvashnin\RouterBenchmark\Generator\PseudoApi;

require __DIR__ . '/../../vendor/autoload.php';

fast_route();
pathfinder();
symfony();

function fast_route(): void
{
    $template = <<<'PHP'
<?php

declare(strict_types=1);

/**
 * Do not edit! This file is generated from `src/Generator/PseudoApi.php`
 * by `src/Generator/generate.php` script.
 */

namespace SergeKvashnin\RouterBenchmark\Fixtures;

use FastRoute\RouteCollector;

return static function (RouteCollector $routes): void {
/* [...] */
};

PHP;

    $record = <<<'PHP'
    $routes->addRoute('%3$s', '%2$s', 'r_%1$d');
PHP;

    $records = '';
    foreach (PseudoApi::routes() as $i => $route) {
        $method = array_shift($route);
        $records .= sprintf(
                $record,
                $i,
                stringify(
                    $route,
                    static fn(string $parameter, string|null $regex) => $regex ? "{{$parameter}:{$regex}}" : "{{$parameter}}"
                ),
                $method
            ) . "\n";
    }

    file_put_contents(
        __DIR__ . '/../routes/fast_route_routes.php',
        str_replace('/* [...] */', $records, $template)
    );
}

function pathfinder(): void
{
    $template = <<<'PHP'
<?php

declare(strict_types=1);

/**
 * Do not edit! This file is generated from `src/Generator/PseudoApi.php`
 * by `src/Generator/generate.php` script.
 */

use Norvica\Pathfinder\Pathfinder;

return static function (Pathfinder $routes): void {
/* [...] */
};

PHP;

    $record = <<<'PHP'
    $routes->route('%3$s', '%2$s', 'r_%1$d');
PHP;

    $records = '';
    foreach (PseudoApi::routes() as $i => $route) {
        $method = array_shift($route);
        $records .= sprintf(
                $record,
                $i,
                stringify(
                    $route,
                    static fn(string $parameter, string|null $regex) => $regex ? "{{$parameter}:{$regex}}" : "{{$parameter}}"
                ),
                $method
            ) . "\n";
    }

    file_put_contents(
        __DIR__ . '/../routes/pathfinder_routes.php',
        str_replace('/* [...] */', $records, $template)
    );
}

function symfony(): void
{
    $template = <<<'PHP'
<?php

declare(strict_types=1);

/**
 * Do not edit! This file is generated from `src/Generator/PseudoApi.php`
 * by `src/Generator/generate.php` script.
 */

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

return static function (RouteCollection $routes): void {
/* [...] */
};

PHP;

    $record = <<<'PHP'
    $routes->add('r_%1$d', new Route(path: '%2$s', methods: ['%3$s']));
PHP;

    $records = '';
    foreach (PseudoApi::routes() as $i => $route) {
        $method = array_shift($route);
        $records .= sprintf(
            $record,
            $i,
            stringify(
                $route,
                static fn(string $parameter, string|null $regex) => $regex ? "{{$parameter}<{$regex}>}" : "{{$parameter}}"
            ),
            $method
        ) . "\n";
    }

    file_put_contents(
        __DIR__ . '/../routes/symfony_routes.php',
        str_replace('/* [...] */', $records, $template)
    );
}

function stringify(array $definition, Closure $parameterizer): string
{
    return array_reduce(
        $definition,
        static function (string $route, array|string $chunk) use ($parameterizer) {
            return is_string($chunk)
                ? "{$route}/{$chunk}"
                : "{$route}/{$parameterizer(array_keys($chunk)[0], array_values($chunk)[0])}";
        },
        ''
    );
}
