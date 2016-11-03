<?php 
  include "ParentClass.php";
  include "ChildClass.php";

  $parentClassVowel = new ParentClass("awesomestring");
  $parentClassConsonant = new ParentClass("crazystring");
  $childClassVowel = new ChildClass("nicole", "awesomestring");
  $childClassConsonant = new ChildClass("beyonce", "crazystring");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

  <h1>Assignment 3 - Working with PHP</h1>
<?php 
    echo $parentClassVowel->getRegularString()."<br>";
    echo $parentClassVowel->toPigLatin($parentClassVowel->getRegularString())."<br>";
    echo $parentClassVowel."<br>";
    
    echo $parentClassConsonant->getRegularString()."<br>";
    echo $parentClassConsonant->toPigLatin($parentClassConsonant->getRegularString())."<br>";
    echo $parentClassConsonant."<br>";

    echo $childClassVowel->getOriginalString()."<br>";
    echo $childClassVowel->capitalizePigLatin()."<br>";
    echo $childClassVowel->addUserExclamationPoints()."<br>";
    echo $childClassVowel."<br>";


?>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	
</body>
</html>
