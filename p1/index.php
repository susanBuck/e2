<?php

$coin = ['heads', 'tails'];

# Flip the coin for Player A
$playerA = $coin[rand(0, 1)];

# For Player B default to whatever side is left
if ($playerA == 'heads') {
    $playerB = 'tails';
} else {
    $playerB = 'heads';
}

# Flip to pick the winning side
$flip = $coin[rand(0, 1)];

# Decide the winner
if ($playerA == $flip) {
    $winner = 'Player A';
} else {
    $winner = 'Player B';
}

require 'index-view.php';