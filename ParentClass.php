<?php
	// This is the file for the parent class

	class ParentClass {

    public $regularString;

    public function __construct($regularString){
      $this->regularString = $regularString;  
    }

    public function getRegularString(){
      return $this->regularString;
    }

    //Translate the given string into pig latin
    public function toPigLatin(){
      $pigEnding = "ay";
      $lowercaseInput = strtolower($this->regularString);
      $firstLetter = $lowercaseInput[0];

      if ($firstLetter == "a" || $firstLetter == "e" || $firstLetter == "i" || $firstLetter == "o" || $firstLetter == "u"){
        $pigWord = "$lowercaseInput$pigEnding";
      }
      else {
        $pigWord = substr($lowercaseInput, 1) . "" . "$firstLetter$pigEnding";
      }
      return $pigWord."\n";
    }

    //Return the result of this pig latin translation as a string
    public function __toString(){
      $pigLatinWord = $this->toPigLatin();
      return "The translation of this word is: $pigLatinWord\n";
    }

	}
?>
