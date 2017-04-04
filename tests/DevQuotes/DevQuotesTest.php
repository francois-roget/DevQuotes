<?php
namespace DevQuotes;

use PHPUnit_Framework_TestCase;

class DevQuotesTest extends PHPUnit_Framework_TestCase
{

	private $message = "Test Message";

	public function testDevQuoteUnknownMessage()
	{
		$dquote = new DevQuote($this->message);

		$this->assertEquals($this->message, $dquote->getMessage());
		$this->assertEquals("Unknown", $dquote->getAuthor());
	}

	public function testDevQuoteMessage()
	{
		$dquote = new DevQuote($this->message, "FRoget");

		$this->assertEquals($this->message, $dquote->getMessage());
		$this->assertEquals("FRoget", $dquote->getAuthor());
	}

	public function testDevQuotesStore()
	{
		$dquote = new DevQuote($this->message);
		$store = new QuotesStore();
		$store->addQuote($dquote);

		$storedQuote = $store->randomQuote();

		$this->assertNotNull($storedQuote);
		$this->assertEquals($this->message, $storedQuote->getMessage());
	}

}