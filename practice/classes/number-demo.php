<?php

require 'Number.php';
require 'EvenNumber.php';
require 'Debug.php';

use HES\Number;
use HES\EvenNumber;
use HES\Debug as DebugA;
use ABC\Debug as DebugB;

$example1 = new Number(9);
$example2 = new EvenNumber(20);

// var_dump($example1->isValid()); # true
// var_dump($example2->isValid()); # true
// $example1->test();

// $debug = new Debug();
// $debug->dump('Hello world');

// var_dump(['a', 'b', ['x', 'y', 'z']]);

DebugA::dump(['a', 'b', ['x', 'y', 'z']]);