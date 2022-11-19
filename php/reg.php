<?php
// database connection code
if(isset($_POST['uname']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
include('db.php');

// get the post records

$name = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['password'];
$c_pass = $_POST['cpassword'];

// database insert SQL code
$sql = "INSERT INTO `userprofile` (`username`, `useremail`, `password`, `c_password`) VALUES ('$name', '$email', '$pass', '$c_pass')";

// insert in database 
$rs = mysqli_query($conn, $sql);
if($rs)
{
	"New record created successfully.";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>