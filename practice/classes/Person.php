<?php

class Person
{
    # properties
    public $firstName;
    public $lastName;
    public $age;

    # methods
    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getClassification()
    {
        // if($this->age >= 18) {
        //     return 'adult';
        // } else {
        //     return 'minor';
        // }

        return ($this->age >= 18) ? 'adult' : 'minor';
    }
}