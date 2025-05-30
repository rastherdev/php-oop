<?php
$const = 5;
$some  = function(int $n) use($const): int {
    return $n + 1 + $const;
};
function factorial(int $n): int {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

function show(callable $fn, int $n): int {
    return $fn($n);
}

show($some, 5); // Outputs: 6
show('factorial', 5); // Outputs: 120