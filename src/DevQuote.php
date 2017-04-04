<?php 
namespace froget\DevQuotes;
 
class DevQuote {

  private $quote;
  
  function __construct($message) {		
    $this->quote = $message;		
  }
 
  public function getQuote()
  {
    return $this->quote;
  }
 
}