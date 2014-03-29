<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/main.css?v=1">
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>





<div class="grid-row">
<div class="nb-4">
<div class="modules">
<h1>Scss modules manager</h1>
<div class="mod-create">
<h2>Create Module</h2>
<form class="form-box" action="create-mod.php" method="post">
	<input type="text" name="modName" />
	<input type="Submit" name="Submit" value="Create">
</form>
</div>
<div class="mod-delete">
<h2>Delete Module</h2>
<form class="form-box" action="delete-mod.php" method="post">
	<input type="text" name="partialName" />
	<input type="Submit" name="Submit" value="Delete">
</form>
</div>
<div class="mod-list">
<h2>Modules List</h2>
 <?php
    $orig = "../scss/modules";
    if ($dir = opendir($orig)) {


        while ($file = readdir($dir)) {
        $ok = "true";
        $filename = $file;
        if ($file == "."){
        $ok = "false";
        }
        else if ($file == ".."){
        $ok = "false";
        }
        if ($ok == "true"){
          echo "<a href= '/scss/modules/$file'>$filename</a>";
        echo "<br>";
        }
        }

        closedir($dir);
    }
    ?> 
</div>
</div>
</div>























<div class="nb-4">
<div class="layouts">
<h1>Scss layouts manager</h1>
<div class="mod-create">
<h2>Create Module</h2>
<form class="form-box" action="create-layout.php" method="post">
	<input type="text" name="layoutName" />
	<input type="Submit" name="Submit" value="Create">
</form>
</div>
<div class="mod-delete">
<h2>Delete Module</h2>
<form class="form-box" action="delete-layout.php" method="post">
	<input type="text" name="layoutName" />
	<input type="Submit" name="Submit" value="Delete">
</form>
</div>
<div class="mod-list">
<h2>Modules List</h2>
 <?php
    $orig = "../scss/layouts";
    if ($dir = opendir($orig)) {


        while ($file = readdir($dir)) {
        $ok = "true";
        $filename = $file;
        if ($file == "."){
        $ok = "false";
        }
        else if ($file == ".."){
        $ok = "false";
        }
        if ($ok == "true"){
          echo "<a href= '/scss/layouts/$file'>$filename</a>";
        echo "<br>";
        }
        }

        closedir($dir);
    }
    ?> 
</div>
</div>
</div>

<div class="nb-4">
<div class="layouts">
<h1>Scss root manager</h1>
<div class="mod-create">
<h2>Create Module</h2>
<form class="form-box" action="../partial-genr8r/create.php" method="post">
	<input type="text" name="partialName" />
	<input type="Submit" name="Submit" value="Create">
</form>
</div>
<div class="mod-delete">
<h2>Delete Module</h2>
<form class="form-box" action="../partial-genr8r/delete.php" method="post">
	<input type="text" name="partialName" />
	<input type="Submit" name="Submit" value="Delete">
</form>
</div>
<div class="mod-list">
<h2>Modules List</h2>
 <?php
    $orig = "../scss/modules";
    if ($dir = opendir($orig)) {


        while ($file = readdir($dir)) {
        $ok = "true";
        $filename = $file;
        if ($file == "."){
        $ok = "false";
        }
        else if ($file == ".."){
        $ok = "false";
        }
        if ($ok == "true"){
          echo "<a href= '/scss/modules/$file'>$filename</a>";
        echo "<br>";
        }
        }

        closedir($dir);
    }
    ?> 
</div>
</div>
</div>




</div>





</body>
</html>