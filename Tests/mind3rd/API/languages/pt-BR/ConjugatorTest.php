<?php

require_once dirname(__FILE__) . '/../../../../../mind3rd/API/languages/pt-BR/Conjugator.php';

/**
 * Test class for Conjugator.
 * Generated by PHPUnit on 2010-12-17 at 22:16:50.
 */
class ConjugatorTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var Conjugator
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new Conjugator;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

	}

	/**
	 * @todo Implement testIsVerb().
	 */
	public function testIsVerb() {
		$this->assertTrue(Conjugator::isVerb('correr'));
	}
	public function testIsVerb1() {
		$this->assertTrue(Conjugator::isVerb('nadar'));
	}
	public function testIsVerb2() {
		$this->assertTrue(Conjugator::isVerb('nadam'));
	}
	public function testIsVerb3() {
		$this->assertTrue(Conjugator::isVerb('ministrarão'));
	}
	public function testIsVerb4() {
		$this->assertTrue(Conjugator::isVerb('apresentar'));
	}
	public function testIsVerb5() {
		$this->assertTrue(Conjugator::isVerb('coloco'));
	}
	public function testIsVerb6() {
		$this->assertTrue(Conjugator::isVerb('lemos'));
	}
	public function testIsVerb7() {
		$this->assertTrue(Conjugator::isVerb('correremos'));
	}
	public function testIsVerb8() {
		$this->assertTrue(Conjugator::isVerb('ministrarão'));
	}
	public function testIsVerb9() {
		$this->assertTrue(Conjugator::isVerb('tomamos'));
	}
	public function testIsVerb10() {
		$this->assertTrue(Conjugator::isVerb('comemos'));
	}
	public function testIsVerb11() {
		$this->assertTrue(Conjugator::isVerb('beberemos'));
	}
	public function testIsVerb12() {
		$this->assertTrue(Conjugator::isVerb('tomo'));
	}
	public function testIsVerb13() {
		$this->assertTrue(Conjugator::isVerb('como'));
	}
	public function testIsVerb14() {
		$this->assertTrue(Conjugator::isVerb('toma'));
	}
	public function testIsVerb15() {
		$this->assertTrue(Conjugator::isVerb('coma'));
	}
	public function testIsVerb17() {
		$this->assertTrue(Conjugator::isVerb('levantaremos'));
	}

	// testing the toInfinitive method
	// NOTICE that its goas is about the present/future words...
	// past is not supported
	public function testToInfinitive1() {
		$this->assertEquals('saber', Conjugator::toInfinitive('sei'));
	}
	public function testToInfinitive2() {
		$this->assertEquals('poderá', Conjugator::toInfinitive('poderá'));
	}
	public function testToInfinitive3() {
		$this->assertEquals('amar', Conjugator::toInfinitive('ama'));
	}
	public function testToInfinitive4() {
		$this->assertEquals('correr', Conjugator::toInfinitive('corre'));
	}
	public function testToInfinitive5() {
		$this->assertEquals('correr', Conjugator::toInfinitive('correm'));
	}
	public function testToInfinitive6() {
		$this->assertEquals('lavar', Conjugator::toInfinitive('lavam'));
	}
	public function testToInfinitive7() {
		$this->assertEquals('ministrar', Conjugator::toInfinitive('ministram'));
	}
	public function testToInfinitive8() {
		$this->assertEquals('ter', Conjugator::toInfinitive('terão'));
	}
	public function testToInfinitive9() {
		$this->assertEquals('alimentar', Conjugator::toInfinitive('alimentarão'));
	}
	public function testToInfinitive10() {
		$this->assertEquals('pôr', Conjugator::toInfinitive('põe'));
	}
	public function testToInfinitive11() {
		$this->assertEquals('colocar', Conjugator::toInfinitive('colocarão'));
	}
	public function testToInfinitive12() {
		$this->assertEquals('varrer', Conjugator::toInfinitive('varrer'));
	}

	/**
	 * @todo Implement testLoadVerbs().
	 */
	public function testLoadVerbs() {
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
				'This test has not been implemented yet.'
		);
	}

}

?>