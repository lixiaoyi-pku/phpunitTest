<?php

require dirname(__DIR__) ."/vendor/autoload.php";
require dirname(__DIR__) ."/src/Money.php";

class MoneyTest extends PHPUnit_Framework_TestCase{

	private $a, $b;
	function setUp(){
		$this->a = new Money(1);
	}

	public function testCanBeNegated(){

		$b = $this->a->negate();

		$this->assertEquals(-1,$b->getAmount());
	}
}
