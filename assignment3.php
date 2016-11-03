<?php 
  include "ParentClass.php";
  include "ChildClass.php";

  $parentClassVowel = new ParentClass("awesomestring");
  $parentClassConsonant = new ParentClass("crazystring");
  $childClassVowel = new ChildClass("nicole", "awesomestring");
  $childClassConsonant = new ChildClass("beyonce", "crazystring");

  //Cloned the child class
  $copiedChildClass = $childClassConsonant->cloneObject();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Assignment 3</title>
  </head>
  <body>

    <h1 class="page-title">Assignment 3 - Working with PHP</h1>

    <h2>This is the original string:</h2>
    <h3><?php echo $parentClassVowel->getOriginalString();?></h3>
    <h2>This is the pig latin translation:</h2>
    <h3><?php echo $parentClassVowel->toPigLatin($parentClassVowel->getOriginalString());?></h3>
    <h3><?php echo $parentClassVowel?></h3>

    <hr/>

    <h2>This is the original string:</h2>
    <h3><?php echo $parentClassConsonant->getOriginalString();?></h3>
    <h2>This is the pig latin translation:</h2>
    <h3><?php echo $parentClassVowel->toPigLatin($parentClassConsonant->getOriginalString());?></h3>
    <h3><?php echo $parentClassConsonant?></h3>

    <hr/>

    <h2>This is the original string:</h2>
    <h3><?php echo $childClassConsonant->getOriginalString();?></h3>
    <h2>Here is the pig latin capitalized:</h2>
    <h3><?php echo $childClassConsonant->capitalizePigLatin();?></h3>
    <h2>Here is the user's name with exclamation points:<h2>
    <h3><?php echo $childClassConsonant->addUserExclamationPoints();?>
    <h2><?php echo $childClassConsonant;?></h2>

    <hr/>

    <h2>This is the original string:</h2>
    <h3><?php echo $childClassVowel->getOriginalString();?></h3>
    <h2>Here is the pig latin capitalized:</h2>
    <h3><?php echo $childClassVowel->capitalizePigLatin();?></h3>
    <h2>Here is the user's name with exclamation points:<h2>
    <h3><?php echo $childClassVowel->addUserExclamationPoints();?>
    <h2><?php echo $childClassVowel;?></h2>
    <link rel="stylesheet" href="assignment3.css">

    <hr/>
    <h2>This is the copied object!</h2>
    <h2>This is the original string:</h2>
    <h3><?php echo $copiedChildClass->getOriginalString();?></h3>
    <h2>Here is the pig latin capitalized:</h2>
    <h3><?php echo $copiedChildClass->capitalizePigLatin();?></h3>
    <h2>Here is the user's name with exclamation points:<h2>
    <h3><?php echo $copiedChildClass->addUserExclamationPoints();?>
    <h2><?php echo $copiedChildClass;?></h2>

    <link rel="stylesheet" href="assignment3.css">
    
  </body>
</html>
