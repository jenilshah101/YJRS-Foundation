<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "disaster";
	$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ID1=$_POST['id'];
$Pass1=$_POST['pass'];

if(empty($_SESSION))
	session_start();
if(isset($_SESSION['id']))
{
	header("Location:adminyjrs.html");
	exit;
}
$sql =("Select * from login where UserID=$ID1 AND Password=$Pass1");
if ($conn->query($sql) !=0) {
   	header("Location:adminyjrs.html");
} else {
    echo "Incorrect Details";
}
$conn->close();
?>