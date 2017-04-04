<?php 
namespace froget\DevQuotes;
 
class QuotesStore {

  private $store = array();

	/**
	 * @param DevQuote
	 */
	public function addQuote($quote)
  {
    $this->store[] = $quote;
  }

	/**
	 * @return DevQuote
	 */
	public function randomQuote()
  {
  	if(count($this->store)>0){
  		return $this->store[0];
  	}
  }
 
}