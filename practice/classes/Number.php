<?php

namespace HES;

class Number
{
    public $num;

    public function __construct($num)
    {
        $this->num = $num;
    }

    public function getHalf()
    {
        return $this->num / 2;
    }

    public function isValid()
    {
        $this->test();
        return is_numeric($this->num);
    }

    protected function test()
    {
        var_dump('Testing...');
    }
}