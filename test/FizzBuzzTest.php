<?php
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testGivenOneWhenFizzBuzzThenReturnOne()
    {
        $this->assertEquals(1, FizzBuzz::execute(1));
    }

    public function testGivenThreeWhenFizzBuzzThenReturnFizz()
    {
        $this->assertEquals("Fizz", FizzBuzz::execute(3));
    }

    public function testGivenFiveWhenFizzBuzzThenReturnFizz()
    {
        $this->assertEquals("Buzz", FizzBuzz::execute(5));
    }

    public function testGivenFifteenWhenFizzBuzzThenReturnFizz()
    {
        $this->assertEquals("FizzBuzz", FizzBuzz::execute(15));
    }
}