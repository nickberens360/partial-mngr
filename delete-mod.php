<?php include 'config.php'; ?>
<?php

//Get file name from user input
$myFile = $_POST["partialName"];
//Create @import string
$myImport ="@import " . '"' . $myFile . '";' ;
//Create file name string
$myFile = "_" . $myFile . ".scss";
//Create file path string
$filePath = "../scss/modules/_modules.scss";
//Place contents of file into variable
$contents = file_get_contents($filePath);
//Remove desired @import string
$contents = str_replace($myImport, "", $contents);
//Write contents back to file
$contents = file_put_contents($filePath, $contents);




$dir = "../scss/modules/";

unlink($dir.$myFile);


header("location:index.php");

?>