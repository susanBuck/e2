<?php

require 'Person.php';

$person = new Person('John', 'Harvard', 45);

echo $person->firstName; # Should print "John"

echo $person->getFullName(); # Should print "John Harvard"

echo $person->getClassification(); # Should print "adult"