<?php

/*----------------------------------------------------
Week 4, Part 2: Arrays
-----------------------------------------------------*/
# Define an array of strings
#           0       1         2
$moves = ['rock', 'paper', 'scissors'];

# Define an array of integers
#                0, 1, 2, 3, 4, 5
$strawLengths = [2, 2, 2, 2, 2, 1];

# Define an array of mixed values
$mixed = ['rock', 1, .04, true];

# Practice extracting values from the array using keys
// echo $moves[0]; # 'rock'
// echo $moves[1];
// echo $moves[2];
// echo $moves[3]; # Notice: Undefined offset: 3
// var_dump($moves);

# Randomly extracting a value from the array
$randomNumber = rand(0, 2);
$move = $moves[$randomNumber];

# Associative arrays
$coin_values = [
    'penny' => .01,
    'nickel' => .05,
    'dime' => .10,
    'quarter' => .25
];

$coin_counts = [
    'penny' => 100,
    'nickel' => 25,
    'dime' => 100,
    'quarter' => 34,
];

# Extracting a value from an associative array by the key name
//var_dump($coin_values['quarter']); # .25

# Sort an array by its values
asort($coin_counts);

# Reverse sort an array by its values
arsort($coin_counts);

# Sort an array by its keys
ksort($coin_counts);

# Combining all our coin data into one multi-dimensional associative array
$total = 0;
$coins = [
    'penny' => [
        'count' => 100,
        'value' => .01
    ],
    'nickel' => [
        'count' => 25,
        'value' => .05
    ],
    'dime' => [
        'count' => 100,
        'value' => .10
    ],
    'quarter' => [
        'count' => 34,
        'value' => .25
    ],
    'halfDollar' => [
        'count' => 10,
        'value' => .50
    ]
];

# Using the above array, we can dynamically calculate a total
foreach ($coins as $coin => $info) {
    $total = $total + ($info['count'] * $info['value']);
}

# Some more basic array manipulation using card games as an example
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
shuffle($cards);

# Split the deck into 2
$playerCards = array_splice($cards, 0, count($cards) / 2);
$computerCards = $cards;

# One way to draw a card for the player
$playerDraw = $playerCards[count($playerCards) - 1];

# A better way to draw a card for the player because it alters the original array
$playerDraw = array_pop($playerCards);



/*----------------------------------------------------
Week 4, Part 3: Internal (built-in) functions
-----------------------------------------------------*/
$str = strtolower("Mary Had A Little Lamb and She LOVED It So");
//var_dump($str); // Prints mary had a little lamb and she loved it so

$stringA = "Mary Had A Little Lamb and She LOVED It So";
$stringB = "Mary";

// var_dump(stripos($stringA, $stringB)); # 0

$letters = ['a', 'x', 'f', 'l', 'b'];

// var_dump(asort($letters)); # bool(true)
// var_dump($letters);



/*----------------------------------------------------
Week 4, Part 4: Conditionals
-----------------------------------------------------*/
$coin = ['heads', 'tails'];

# Player’s choice
$randomNumber = rand(0, 1);
$player1Choice = $coin[$randomNumber];

# Coin flip logic using conditionals
$randomNumber = rand(0, 1);
$flip = $coin[$randomNumber];

//var_dump(4 > 5); # False
//var_dump(6 > 5); # True;
//var_dump(6 == 9); # False;

if ($player1Choice == $flip) {
    //var_dump('Player 1 wins!');
} else {
    //var_dump('Player 1 lost :(');
}

# RPS Scissors logic using conditionals
$moves = ['rock', 'paper', 'scissors'];
$player1Move = $moves[rand(0, 2)];
$player2Move = $moves[rand(0, 2)];

// var_dump($player1Move);
// var_dump($player2Move);

if ($player1Move == $player2Move) {
    //var_dump('Tie');
} elseif ($player1Move == 'rock' and $player2Move == 'paper') {
    //var_dump('Player 2 wins');
} elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    //var_dump('Player 1 wins');
}
# ...etc...





/*----------------------------------------------------
Week 4, Part 5: Loops
-----------------------------------------------------*/
# Count from 0-10 using a foreach loop
$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numbers as $key => $number) {
    //var_dump($number);
}

# Count from 0-10 using a for loop
for ($i = 0; $i <= 10; $i++) {
    //var_dump($i);
}

# Count from 0-10 using a while loop
$i = 0;
while ($i <= 10) {
    //var_dump($i);
    $i++;
}

# Example use of while loop in a number guessing game
$answer = 5;
$guess = null;

while ($guess != $answer) {
    $guess = rand(0, 10);
    //var_dump('Guess: ' . $guess);
}

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$dealTo = 'player';