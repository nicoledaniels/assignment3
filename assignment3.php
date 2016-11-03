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

  <?= $parentClassVowel->toPigLatin();
      echo $parentClassVowel; ?>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	
</body>
</html>
