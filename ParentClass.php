<?php
	// This is the file for the parent class

	class ParentClass {

    public $originalString;

    public function __construct($originalString){
      $this->originalString = $originalString;  
    }

    public function getOriginalString(){
      return $this->originalString;
    }

    //Translate the given string into pig latin
    public function toPigLatin($originalString){
      $pigEnding = "ay";
      $lowercaseInput = strtolower($originalString);
      $firstLetter = $lowercaseInput[0];

      if ($firstLetter == "a" || $firstLetter == "e" || $firstLetter == "i" || $firstLetter == "o" || $firstLetter == "u"){
        $pigWord = "$lowercaseInput$pigEnding";
      }
      else {
        $pigWord = substr($lowercaseInput, 1) . "" . "$firstLetter$pigEnding";
      }
      return $pigWord;
    }

    //Return the result of this pig latin translation as a string
    public function __toString(){
      $pigLatinWord = $this->toPigLatin($this->originalString);
      return "The translation of this word is: $pigLatinWord";
    }

	}
?>
