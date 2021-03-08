<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "disaster";
	$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$target_dir="images/";
 $image =$target_dir.basename( $_FILES['image']['tmp_name']);
$Name1=$_POST['Name'];
$Age1=$_POST['Age'];
$Gender1=$_POST['Gender'];
$Nationality1=$_POST['Nationality'];
$Address1=$_POST['Address'];
$Phoneno1=$_POST['Phoneno'];
$Email1=$_POST['Email'];
$sql = "INSERT INTO victim(Photo,Name,Age,Gender,Nationality,Address,Phoneno,Email)
VALUES ('$image','$Name1','$Age1','$Gender1','$Nationality1','$Address1','$Phoneno1','$Email1')";

if ($conn->query($sql) === TRUE) {
	
   	header("Location:adminyjrs.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>