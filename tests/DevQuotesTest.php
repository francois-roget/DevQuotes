<?php
require_once(__DIR__ ."/../src/DevQuote.php");
require_once(__DIR__ ."/../src/QuotesStore.php");

use froget\DevQuotes\DevQuote;
use froget\DevQuotes\QuotesStore;


class DevQuotesTest extends PHPUnit_Framework_TestCase
{

	private $message = "Test Message";

	public function testDevQuoteMessage()
	{
		$dquote = new DevQuote($this->message);

		$this->assertEquals($this->message, $dquote->getQuote());
	}

	public function testDevQuotesStore()
	{
		$dquote = new DevQuote($this->message);
		$store = new QuotesStore();
		$store->addQuote($dquote);

		$this->assertEquals($this->message, $store->randomQuote()->getQuote());
	}

}