<?php 
	// this file will extend ParentClass.php

	class ChildClass extends ParentClass {

    public function __construct($user, $originalString){
      $this->user = $user;
      $this->originalString = $originalString;
    }

    //Get the user
    public function getUser(){
      return $this->user;  
    }

    //Get the original string before tranlsation into pig latin
    public function getOriginalString(){
      return $this->originalString; 
    }

    //Return the user, original string, and pig latin traslation as a string
    public function __toString(){
      $pigLatinWord = parent::toPigLatin($this->originalString);
      $stringRepresentation = "$this->user translates $this->originalString into $pigLatinWord";
      return $stringRepresentation;
    }

    //Capitalize the output from the pig latin from the parent class
    public function capitalizePigLatin() {
      $pigLatinWord = parent::toPigLatin($this->originalString);
      return strtoupper($pigLatinWord);
    }

    //Add exclamation points to the username
    public function addUserExclamationPoints(){
      $exclamationUser = $this.user . "" . "!!!";
      return $exclamationUser;
    }

    public function cloneObject($originalObject){
      $clonedObject = clone $originalObject; 
      return $cloneObject;
    }
		
	}
?>
