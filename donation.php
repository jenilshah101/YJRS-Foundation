<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "disaster";
	$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(empty($_SESSION))
	session_start();
$Name1=$_POST['Name'];
$Email1=$_POST['Email'];
$_SESSION["eml"]=$Email1;

$Phoneno1=$_POST['Phoneno'];
$Amount1=$_POST['amt'];
$_SESSION["am"]=$Amount1;
$sql = "INSERT INTO donation(Name,Email,Phoneno,Amount)
VALUES ('$Name1','$Email1','$Phoneno1','$Amount1')";

if ($conn->query($sql) === TRUE) {
   	header("Location:pay.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>