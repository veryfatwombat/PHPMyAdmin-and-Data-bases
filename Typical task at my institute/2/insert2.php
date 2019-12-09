<?php
$link = mysqli_connect("localhost", "root", "root", "books");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Customer_id = mysqli_real_escape_string($link, $_REQUEST['Customer_id']);
$bookid = mysqli_real_escape_string($link, $_REQUEST['bookid']);
//$Orderdate = mysqli_real_escape_string($link, $_REQUEST['Orderdate']);

$Orderdate = date ("Ymd", $Orderdate);

$OrderDetails = mysqli_real_escape_string($link, $_REQUEST['Order details']);
 
// Attempt insert query execution
	$sql = "INSERT INTO Order (Customer_id, bookid, Orderdate, Order details)
	VALUES ('$Customer_id', '$bookid', '$Orderdate', '$OrderDetails')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>