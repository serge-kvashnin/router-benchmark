# PHP Routers Benchmark

## Introduction

This is a playground
where [FastRoute](https://github.com/nikic/FastRoute), [Symfony Router](https://github.com/symfony/routing),
and my own creation — [Pathfinder](https://github.com/norvica/pathfinder), which is built using a Trie data structure — 
go head-to-head in a performance showdown. This isn't so much about helping you pick a router as it is a curiosity project
— can a new contender outperform tried-and-true solutions? 🙃 See the benchmarks below to find out.

## Getting Started

If you'd like to run benchmarks, ensure you've installed the required packages:

```bash
composer install
```

All benchmarks are set up using [PHPBench](https://github.com/phpbench/phpbench) library.

For all benchmarks, a set of [223 routes](./src/Generator/PseudoApi.php) that closely resemble real-life scenarios is used.

I ran this benchmark on my **MacBook Pro (15-inch, 2016)**.

## Cold Start

This scenario simulates the situation where the router and its routes are constructed without any cache (e.g., file
cache).

```bash
./vendor/bin/phpbench run src/BenchmarkCold --report=aggregate
```

#### Results

```text
+-----------------+-----------------+-----+------+-----+----------+----------+---------+
| benchmark       | subject         | set | revs | its | mem_peak | mode     | rstdev  |
+-----------------+-----------------+-----+------+-----+----------+----------+---------+
| FastRouteBench  | benchFirstRoute |     | 100  | 5   | 1.305mb  | 5.343ms  | ±4.09%  |
| FastRouteBench  | benchLastRoute  |     | 100  | 5   | 1.307mb  | 5.721ms  | ±2.50%  |
| FastRouteBench  | bench404        |     | 100  | 5   | 1.314mb  | 5.784ms  | ±3.69%  |
| PathfinderBench | benchFirstRoute |     | 100  | 5   | 1.243mb  | 1.947ms  | ±11.54% |
| PathfinderBench | benchLastRoute  |     | 100  | 5   | 1.243mb  | 1.605ms  | ±6.75%  |
| PathfinderBench | bench404        |     | 100  | 5   | 1.242mb  | 1.613ms  | ±2.42%  |
| SymfonyBench    | benchFirstRoute |     | 100  | 5   | 2.599mb  | 5.363ms  | ±1.44%  |
| SymfonyBench    | benchLastRoute  |     | 100  | 5   | 2.906mb  | 13.368ms | ±3.13%  |
| SymfonyBench    | bench404        |     | 100  | 5   | 2.908mb  | 13.194ms | ±3.92%  |
+-----------------+-----------------+-----+------+-----+----------+----------+---------+
```

## Warm Start

In this scenario, we consider the use of compiled routes cache stored in a file.

```bash
./vendor/bin/phpbench run src/BenchmarkWarm --report=aggregate
```

#### Results

```text
+-----------------+-----------------+-----+------+-----+-----------+---------+---------+
| benchmark       | subject         | set | revs | its | mem_peak  | mode    | rstdev  |
+-----------------+-----------------+-----+------+-----+-----------+---------+---------+
| FastRouteBench  | benchFirstRoute |     | 100  | 5   | 1.317mb   | 0.845ms | ±12.46% |
| FastRouteBench  | benchLastRoute  |     | 100  | 5   | 1.319mb   | 0.934ms | ±3.83%  |
| FastRouteBench  | bench404        |     | 100  | 5   | 1.327mb   | 0.868ms | ±10.72% |
| PathfinderBench | benchFirstRoute |     | 100  | 5   | 850.496kb | 0.122ms | ±5.55%  |
| PathfinderBench | benchLastRoute  |     | 100  | 5   | 850.496kb | 0.144ms | ±6.33%  |
| PathfinderBench | bench404        |     | 100  | 5   | 849.944kb | 0.152ms | ±13.64% |
| SymfonyBench    | benchFirstRoute |     | 100  | 5   | 2.134mb   | 1.278ms | ±13.56% |
| SymfonyBench    | benchLastRoute  |     | 100  | 5   | 2.134mb   | 1.058ms | ±10.75% |
| SymfonyBench    | bench404        |     | 100  | 5   | 2.134mb   | 1.268ms | ±8.67%  |
+-----------------+-----------------+-----+------+-----+-----------+---------+---------+
```

## Instantiated

Although it may not be a common use-case, this benchmark tests performance in long-running PHP processes. Note: Given
PHP's traditional request-response nature, using long-running processes could be debatable.

```bash
./vendor/bin/phpbench run src/BenchmarkInstantiated --report=aggregate
```

#### Results

```text
+-----------------+-----------------+-----+-------+-----+-----------+---------+---------+
| benchmark       | subject         | set | revs  | its | mem_peak  | mode    | rstdev  |
+-----------------+-----------------+-----+-------+-----+-----------+---------+---------+
| FastRouteBench  | benchFirstRoute |     | 10000 | 5   | 903.176kb | 0.001ms | ±4.48%  |
| FastRouteBench  | benchLastRoute  |     | 10000 | 5   | 903.176kb | 0.006ms | ±4.65%  |
| FastRouteBench  | bench404        |     | 10000 | 5   | 903.136kb | 0.018ms | ±6.94%  |
| PathfinderBench | benchFirstRoute |     | 10000 | 5   | 1.023mb   | 0.002ms | ±4.30%  |
| PathfinderBench | benchLastRoute  |     | 10000 | 5   | 1.023mb   | 0.009ms | ±9.26%  |
| PathfinderBench | bench404        |     | 10000 | 5   | 1.023mb   | 0.009ms | ±12.37% |
| SymfonyBench    | benchFirstRoute |     | 10000 | 5   | 2.840mb   | 0.012ms | ±12.06% |
| SymfonyBench    | benchLastRoute  |     | 10000 | 5   | 2.840mb   | 0.014ms | ±13.95% |
| SymfonyBench    | bench404        |     | 10000 | 5   | 2.840mb   | 0.020ms | ±8.30%  |
+-----------------+-----------------+-----+-------+-----+-----------+---------+---------+
```

## Caveats

Take the benchmark results with a grain of salt. Your mileage may vary based on your specific use-case, hardware, or
other factors.

## Contributing

Feel free to open an issue or submit a pull request if you find any discrepancies or have suggestions to improve the
benchmarks.

## References

* [Fast request routing using regular expressions](https://www.npopov.com/2014/02/18/Fast-request-routing-using-regular-expressions.html)
  by Nikita Popov
* Real World Benchmark PHP Routing [Part I](http://kaloyan.info/writing/2021/05/31/benchmark-php-routing.html) and [Part II](http://kaloyan.info/writing/2021/06/07/more-php-routing-benchmarks.html) by
  Kaloyan K. Tsvetkov
* [Benchmark by Saif Eddin Gmati](https://gist.github.com/azjezz/b2d09a6104b0bdfa4e00f3df96aadf7a)
