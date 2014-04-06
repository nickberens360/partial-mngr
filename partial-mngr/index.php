<?php include 'config.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Partial MNGR</title>
	<link rel="stylesheet" href="../css/main.css?v=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/superhero/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>

<div class="grid-row container">

<h1>Sass Partial MNGR</h1>

<div class="nb-4">
<div class="modules well">
<h1>Modules</h1>
<div class="mod-create">
<h3>Create Module</h3>
<form class="form-box form-inline " action="create-mod.php" method="post">
    <input type="text" class="form-control" id="inputDefault" name="modName">
    <button type="Submit" class="btn btn-primary">Create</button>
    <input type="hidden" name="partial" value="<?php echo $partialDirOne;?>"/>
</form>
</div>
<div class="mod-delete">
<h3>Delete Module</h3>
<form class="form-box form-inline" action="delete-mod.php" method="post">
    <input type="text" class="form-control" id="inputDefault" name="partialName">
    <button type="Submit" class="btn btn-danger">Delete</button>
</form>
</div>
<div class="mod-list">
<br/>
<h4>Modules List</h4>
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
<div class="modules well">
<h1>Layouts</h1>
<div class="mod-create">
<h3>Create Layout</h3>
<form class="form-box form-inline " action="create-mod.php" method="post">
    <input type="text" class="form-control" id="inputDefault" name="modName">
    <input type="hidden" name="partial" value="<?php echo $partialDirTwo;?>"/>
    <button type="Submit" class="btn btn-primary">Create</button>
</form>
</div>
<div class="mod-delete">
<h3>Delete Layout</h3>
<form class="form-box form-inline" action="delete-layout.php" method="post">
    <!-- <input type="text" name="partialName" />
    <input type="Submit" name="Submit" value="Delete"> -->
    <input type="text" class="form-control" id="inputDefault" name="layoutName">
    <button type="Submit" class="btn btn-danger">Delete</button>
</form>
</div>
<div class="mod-list">
<br/>
<h4>Layouts List</h4>
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
<div class="modules well">
<h1>Root</h1>
<div class="mod-create">
<h3>Create Root</h3>
<form class="form-box form-inline " action="create-root.php" method="post">
    <input type="text" class="form-control" id="inputDefault" name="rootName">
    <button type="Submit" class="btn btn-primary">Create</button>
</form>
</div>
<div class="mod-delete">
<h3>Delete Root</h3>
<form class="form-box form-inline" action="delete-root.php" method="post">
    <input type="text" class="form-control" id="inputDefault" name="rootName">
    <button type="Submit" class="btn btn-danger">Delete</button>
</form>
</div>
<div class="mod-list">
<br/>
<h4>Root List</h4>
 <?php
    $orig = "../scss";
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
          echo "<a href= '/scss/$file'>$filename</a>";
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