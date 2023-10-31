<?php

namespace HES;

class EvenNumber extends Number
{
    public function isValid()
    {
        parent::test();
        return parent::isValid() and $this->num % 2 == 0;
    }
}