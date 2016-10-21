<?php
require_once "../src/FizzBuzz.php";

class FizzBuzzTest extends PHPUnit_Framework_Testcase
{

	function __construct()
	{
		$this->fizz = new FizzBuzz();
	}
	public function testComumNumbers()
	{
		$this->assertEquals(1,$this->fizz->verificaFizz(1));
		$this->assertEquals(2,$this->fizz->verificaFizz(2));
		$this->assertEquals(4,$this->fizz->verificaFizz(4));
		$this->assertEquals(7,$this->fizz->verificaFizz(7));
		$this->assertEquals(11,$this->fizz->verificaFizz(11));
	}
	public function testMultipleThree()
	{
		$this->assertEquals("fizz",$this->fizz->verificaFizz(3));
		$this->assertEquals("fizz",$this->fizz->verificaFizz(6));
		$this->assertEquals("fizz",$this->fizz->verificaFizz(9));
		$this->assertEquals("fizz",$this->fizz->verificaFizz(12));
	}
	public function testMultipleFive()
	{
		$this->assertEquals("buzz",$this->fizz->verificaFizz(5));
		$this->assertEquals("buzz",$this->fizz->verificaFizz(10));
		$this->assertEquals("buzz",$this->fizz->verificaFizz(20));
	}
	public function testMultipleFiveAndThree($value='')
	{
		$this->assertEquals("fizzbuzz",$this->fizz->verificaFizz(15));
		$this->assertEquals("fizzbuzz",$this->fizz->verificaFizz(30));
		$this->assertEquals("fizzbuzz",$this->fizz->verificaFizz(90));
	}
}