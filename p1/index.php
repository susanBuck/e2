<?php

# Play 10 rounds
for ($i = 0; $i < 10; $i++) {
    # Flip the coin for Player A
    $playerA = flipCoin();

    # For Player B default to whatever side is left
    $playerB = ($playerA == 'heads') ? 'tails' : 'heads';

    # Flip to pick the winning side
    $flip = flipCoin();

    # Decide the winner
    $winner = ($playerA == $flip) ? 'Player A' : 'Player B';
    
    # Accumulate the results for the view
    $results[] = [
        'playerA' => $playerA,
        'playerB' => $playerB,
        'flip' => $flip,
        'winner' => $winner,
    ];
}

require 'index-view.php';

function flipCoin()
{
    $coin = ['heads', 'tails'];
    return $coin[rand(0, 1)];
}