<!DOCTYPE html>
<html>
<head>
<title>Coding Examples</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<div class="wrapper">
	<h1>Coding Examples</h1>
	
	<h2>Python</h2>
	<div class="codewindow">
	<?php
	    $myfilename = "TransferPhotos.py";
	    if(file_exists($myfilename)){
    	  	  echo '<pre>'.file_get_contents($myfilename).'</pre>';
            }
	?>
	</div>
	
	<h2>C++</h2>
	<div class="codewindow">
	<?php
	$myfilename = "Item.h";
	if(file_exists($myfilename)){
		echo '<pre>'.file_get_contents($myfilename).'</pre>';
	}
	?>
	</div>

	<h2>Java</h2>
	<div class="codewindow">
	<?php
  	$myfilename = "Assignment7.java";
        if(file_exists($myfilename)){
        	echo '<pre>'.file_get_contents($myfilename).'</pre>';
   	}
	?>
	</div>
	
	<h2>PHP</h2>
	<div class="codewindow">
	<?php
    	$myfilename = "example.php";
    	if(file_exists($myfilename)){
        	echo '<pre>'.file_get_contents($myfilename).'</pre>';
    	}
	?>
	</div>
	
	<!--<h2>VBA</h2>
	<div class="codewindow">
	<?php
    	$myfilename = "mytextfile.txt";
    	if(file_exists($myfilename)){
        	echo '<pre>'.file_get_contents($myfilename).'</pre>';
    	}
	?>
	</div>-->
</div>
</body>
</html> 
