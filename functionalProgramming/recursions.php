<?php
function show($n){
    if($n < 1) {
        return;
    }
    echo $n . "<br>";
    return show($n - 1);
}

echo show(20);