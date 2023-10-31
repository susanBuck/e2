<?php

namespace App;

use RPS\Game;

class MyGame extends Game
{
    protected $moves = ['heads', 'tails'];

    protected function determineOutcome($playerMove, $computerMove)
    {
        return $computerMove == $playerMove;
    }
}
