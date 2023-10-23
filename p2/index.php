<?php

session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $winner = $results['winner'];
    $flip = $results['flip'];
    $choice = $results['choice'];

    $_SESSION['results'] = null;
}

require 'index-view.php';