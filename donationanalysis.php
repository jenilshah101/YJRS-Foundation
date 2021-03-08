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
$Name1=$_POST['place'];
$_SESSION["nm"]=$Name1;
$Amount1=$_POST['Amt'];
$_SESSION["amt1"]=$Amount1;
$sql = "INSERT INTO donationanalysis(Place,Amount)
VALUES ('$Name1','$Amount1')";

if ($conn->query($sql) === TRUE) {
   	header("Location:chart1.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>