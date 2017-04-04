<?php 
namespace DevQuotes;
 
class DevQuote {

  private $quote;
  private $author;
  
  function __construct($message, $author="Unknown") {
    $this->quote = $message;
    $this->author = $author;
  }
 
  public function getMessage()
  {
    return $this->quote;
  }

  public function getAuthor()
  {
  	return $this->author;
  }
 
}