<?php
    //CREATES THE LAYOUT PARTIAL FILE
	$fileName = $_POST["layoutName"];
	$ourFileName = "../scss/layouts/_$fileName.scss";
	$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
	fclose($ourFileHandle);
	$importName = "@import " . '"' . $fileName . '";' ;
	
	//WRITES TO THE LAYOUT SCSS FILE
	$myFile = "../scss/layouts/_layouts.scss";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = "$importName\n";
	fwrite($fh, $stringData);
	fclose($fh);  

	header("location:index.php");
	
?>	

