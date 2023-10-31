<?php
session_start();

//require __DIR__.'/vendor/autoload.php';

# Define array of moves - used in the view to display each move
$moves = ['rock', 'paper', 'scissors'];

# Extract results from the session if they eist
$lastGame = $_SESSION['results']['lastGame'] ?? null;
$recentGames = $_SESSION['results']['recentGames'] ?? null;

# Clear the results of the lastGame
$_SESSION['results']['lastGame'] = null;

require 'index-view.php';