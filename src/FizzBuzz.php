<?php

class FizzBuzz
{
    public static function execute($value)
    {
        $returnValue = $value;

        if ($value % 3 == 0) {
            $returnValue =  'Fizz';
        }
        elseif ($value % 5 == 0) {
            $returnValue = 'Buzz';
        }
        elseif ($value == 0 % 5 && $value % 3 == 0) {
            $returnValue = 'FizzBuzz';
        }

        return $returnValue;
    }
}