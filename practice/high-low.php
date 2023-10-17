<?php
# This example demonstrates a function that accepts parameters

function checkNumber($guess, $mysteryNumber)
{
    if ($guess == $mysteryNumber) {
        return 'correct';
    } elseif ($guess > $mysteryNumber) {
        return 'high';
    } else {
        return 'low';
    }
}

// var_dump(checkNumber(3, 6)); # low
// var_dump(checkNumber(7, 3)); # high
var_dump(checkNumber(3, 3)); # correct