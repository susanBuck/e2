<?php

function getCelsius($temperature = null, $includeUnit = true)
{
    # https://en.wikipedia.org/wiki/Fahrenheit#Definition_and_conversion
    $result = ($temperature - 32) / 1.8;

    if ($includeUnit) {
        $result .= ' C';
    }

    return $result;
}