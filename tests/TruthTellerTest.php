<?php

require dirname(__DIR__) .'/vendor/autoload.php';
require dirname(__DIR__) .'/src/TruthTeller.php';

class TruthTellerTest extends PHPUnit_Framework_TestCase{
	function testTest(){
		$tt = new TruthTeller();
		$this->assertTrue($tt->tellTruth());
	}
}
