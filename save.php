<!DOCTYPE html>
<html>
<head>
	<title>KotM</title>
</head>
<body>
<h1>King of the Message - save.php</h1>
<?php 

$cleaned = strip_tags($_GET["userMessage"]);

$file = fopen("read.txt", "w") or die ("Unable to access file!");
fwrite($file, $cleaned);
fclose($file);

$log = fopen("log.txt", "a") or die ("Unable to access file!");
fwrite($log,"\n" . $cleaned . "<br>");
fclose($log);
?>
<meta http-equiv="Refresh" content="0; url=result.php" />
<a href="result.php">Result</a>
<p>Created by Owen.</p>
</body>
</html>