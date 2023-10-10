<?php

session_start();

$results = $_SESSION['results'];

$haveAnswer = $results['haveAnswer'];
$correct = $results['correct'];

require 'done-view.php';