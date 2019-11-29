<?php
$firstname = $_POST["fNm"];
$lastname = $_POST["lNm"];
$address = $_POST["adrs"];
$course = $_POST["crs"];
$myfile = fopen("studentdetails.txt","w");
fwrite($myfile,$firstname.PHP_EOL);
fwrite($myfile,$lastname.PHP_EOL);
fwrite($myfile,$address.PHP_EOL);
fwrite($myfile,$course);
fclose($myfile);
echo "<h1>The details were successfully written to the file</h1>";
echo "<h1>Click Output to display the details</h1>";
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<ul>
	<li><a href="main.html">Home</a></li>
	<li><a href="output.php">Output</a></li>
</ul>
</body>
</html>