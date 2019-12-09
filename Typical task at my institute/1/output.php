<!doctype html>
<?php
$myfile = fopen("studentdetails.txt","r");
$fNm = fgets($myfile);
$lNm = fgets($myfile);
$ads = fgets($myfile);
$crs = fgets($myfile);
fclose($myfile);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center><h2>Student Details</h2></center>
<ul>
	<li><a href="main.html">Home</a></li>
	<li><a href="output.php">Output</a></li>
</ul>
<table id="table" border="1px">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th>Course</th>
	</tr>
	<tr>
		<td><input type="text" value="<?php echo $fNm;?>" disabled></td>
		<td><input type="text" value="<?php echo $lNm;?>" disabled></td>
		<td><input type="text" value="<?php echo $ads;?>" disabled></td>
		<td><input type="text" value="<?php echo $crs;?>" disabled></td>
	</tr>
</table>
</body>
</html>