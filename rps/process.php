<?php

require __DIR__.'/vendor/autoload.php';

use RPS\Game;

//use App\MyGame;

# Get the player’s move from the form data
$player = $_POST['player'];

# Initialize a new Game object
$game = new Game($persistResults = true, $maxResults = 3);

# Store the results in the session
$_SESSION['results'] = [
    'lastGame' => $game->play($player),
    'recentGames' => $game->getResults()
];

# Send the user back to the index page where the results will be extracted/displayed
header('Location: index.php');