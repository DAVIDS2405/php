<?php

function show($n)
{
    if ($n < 1) {
        return;
    }

    echo "Hola " . $n . "\n";
    show($n - 1);
}
