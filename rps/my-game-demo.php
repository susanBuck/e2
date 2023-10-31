<?php

require __DIR__.'/vendor/autoload.php';

use RPS\Game;
use App\MyGame;
use App\Debug;

$game = new Game();
$myGame = new MyGame();

Debug::dump($myGame->play('heads'));