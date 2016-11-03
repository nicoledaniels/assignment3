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
    public function toPigLatin($originalString){
      $pigEnding = "ay";
      $lowercaseInput = strtolower($input);
      $firstLetter = $lowercaseInput[0];

      if ($firstLetter == "a" || $firstLetter == "e" || $firstLetter == "i" || $firstLetter == "o" || $firstLetter == "u"){
        $pigWord = "$lowercaseInput$pigEnding";
      }
      else {
        $pigWord = substr($lowercaseInput, 1) . "" . "$firstLetter$pigEnding";
      }
      return $pigWord;
    }

    //Return the result of the pig latin translation
    public function __toString(){
      $pigLatinWord = toPigLatin($this->regularString);
      return $pigLatinWord;
    }

	}
?>
