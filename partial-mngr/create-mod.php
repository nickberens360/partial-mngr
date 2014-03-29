<?php
    //CREATES THE MODULE PARTIAL FILE
	$fileName = $_POST["modName"];
	$ourFileName = "../scss/modules/_$fileName.scss";
	$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
	fclose($ourFileHandle);
	$importName = "@import " . '"' . $fileName . '";' ;
	
	//WRITES TO THE MODULES SCSS FILE
	$myFile = "../scss/modules/_modules.scss";
	$fh = fopen($myFile, 'a') or die("can't open file");
	$stringData = "$importName\n";
	fwrite($fh, $stringData);
	fclose($fh);  

	header("location:index.php");
	
?>	






