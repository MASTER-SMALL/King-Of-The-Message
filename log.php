<!DOCTYPE html>
<html>
<head>
	<title>KotM</title>
	<style type="text/css">
		.infobox {
			background-color: Gainsboro;
			font-family: Arial;
			margin-right: auto;
			margin-left: auto;
			width: 16em;
			text-align: center;
			border-color: black;
			border-width: 8px;
			border-style: solid;
		}
	</style>
</head>
<body>
	<h1>King of the Message - log.php</h1>
	<div class="infobox">
	<?php
	$logfile = fopen("log.txt", "r") or die("Unable to open file!");
	$file = file("log.txt");
	$file = array_reverse($file);
	foreach($file as $f){
 	   echo $f."<br />";
	}
	# In order code: 
	//echo fread($logfile,filesize("log.txt"));
	fclose($logfile);
	?>

	<br>
	<a href="result.php">Current Message</a><br>
	<a href="index.html">Back to index.html</a>
	<br>
	<p>Created by <a href="https://github.com/MASTER-SMALL">Owen.</a></p>
	</div>
</body>
</html>