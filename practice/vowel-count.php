<?php
function vowelCount($word)
{
    $count = 0;

    # str_split is used to convert the word to an array which we then loop through
    # one character at a time
    foreach (str_split($word) as $character) {
        # If the character is a vowel, increment count by 1
        if (in_array($character, ['a','e','i','o','u'])) {
            $count++;
        }
    }

    return $count;
}

var_dump(vowelCount('apple')); # Should yield 2
var_dump(vowelCount('lynx')); # Should yield 0
var_dump(vowelCount('hi')); # Should yield 1
var_dump(vowelCount('mississippi')); # Should yield 4


/*
The following is an alternative solution to the vowel count function using
regular expressions (which were briefly discussed in the Week 8 Part 1 lecture video)
*/
function vowelCount2($word)
{
    preg_match_all('/[aeiou]/i', $word, $matches);
    return count($matches[0]);
}