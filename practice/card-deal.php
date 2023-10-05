<?php

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);

$playerCards = [];
$computerCards = [];



# VARIATION 1
$dealTo = 'player';
foreach ($cards as $key => $card) {
    if ($dealTo == 'player') {
        $playerCards[] = array_pop($cards);
        $dealTo = 'computer';
    } else {
        $computerCards[] = array_pop($cards);
        $dealTo = 'player';
    }
}

# VARIATION 2 - modulo operator
# Ref: https://www.php.net/manual/en/language.operators.arithmetic.php
// foreach($cards as $key => $card) {
//     if($key % 0 == 0) {
//         $playerCards[] = array_pop($cards);
//     } else {
//         $computerCards[] = array_pop($cards);
//     }
// }

# VARIATION 3 - Popping the dealt card before the loop
// foreach ($cards as $key => $card) {
//     $cardToDeal = array_pop($cards);

//     if ($key % 2 == 0) {
//         $playerCards[] = $cardToDeal;
//     } else {
//         $computerCards[] = $cardToDeal;
//     }
// }

# VARIATION 4 - Dynamic variables
// foreach ($cards as $key => $card) {
//     if ($key % 2 == 0) {
//         $dealTo = 'playerCards';
//     } else {
//         $dealTo = 'computerCards';
//     }

//     # Dynamic variables : https://www.php.net/manual/en/language.variables.variable.php
//     $$dealTo[] = array_pop($cards);
// }


# VARIATION 5 - Using a while loop
// $dealTo = 'player';
// while (count($cards) > 0) {
//     if ($dealTo == 'player') {
//         $playerCards[] = array_pop($cards);
//         $dealTo = 'computer';
//     } else {
//         $computerCards[] = array_pop($cards);
//         $dealTo = 'player';
//     }
// }

# VARIATION 6 - A while loop without the need to keep track of who to deal to
# Limitation: Only works with a even number of cards
// while(count($cards) > 0) {
//     $playerCards[] = array_pop($cards);
//     $computerCards[] = array_pop($cards);
// }




# Output results
var_dump($playerCards); # Should yield 5 random cards
var_dump($computerCards); # Should yield 5 different random cards