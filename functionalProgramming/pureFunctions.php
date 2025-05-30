<?php
class Counter{
    public int $count = 0;
}

$counter = new Counter();

function show(Counter $counter): string {
    $counter->count++;
    return "Count: " . $counter->count . "\n";
}

function add(float $a, float $b): float {
    return $a + $b;
}

echo show($counter);
echo show($counter);
echo show($counter);