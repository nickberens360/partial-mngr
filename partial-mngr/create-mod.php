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

    


	$stringData = "\n$importName\n";

 

	fwrite($fh, $stringData);

                  
	fclose($fh);  

	file_put_contents($myFile, implode(PHP_EOL, file($myFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));



	header("location:index.php");
	
?>	






