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
	<h1>King of the Message - result.php</h1>
	<div class="infobox">
	<?php
	$myfile = fopen("read.txt", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("read.txt"));
	fclose($myfile);
	?>
	<br>
	<a href="log.php">Complete Log</a><br>
	<a href="index.html">Back to index.html</a>
	<br>
	<p>Created by <a href="https://github.com/MASTER-SMALL">Owen.</a></p>
	</div>
</body>
</html>