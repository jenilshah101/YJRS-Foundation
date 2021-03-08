<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "disaster";
	$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$msg="You have been registered as volunteer with YJRS foundation.\n we will contact you in case of emergency. ";
$Name1=$_POST['Name'];
$Age1=$_POST['Age'];
$Gender1=$_POST['Gender'];
$Nationality1=$_POST['Nationality'];
$Address1=$_POST['Address'];
$Phoneno1=$_POST['Phoneno'];
$Email1=$_POST['Email'];

$sql = "INSERT INTO volunteer(Name,Age,Gender,Nationality,Phoneno,Address,Email)
VALUES ('$Name1','$Age1','$Gender1','Nationality1','$Phoneno1','$Address1','$Email1')";

if ($conn->query($sql) === TRUE) {
	mail($Email1,"YJRS foundation",$msg);
	header("Location:index.html");

   	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>