<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="powderblue">

</body>
</html>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "disaster";
	$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Name= $_POST['Name'];
$Age = $_POST['Age'];
$Gender = $_POST['Gender'];
$Address = $_POST["Address"];
$Nationality=$_POST["Nationality"];
$sql =("Select * from victim where Name=$Name AND Age=$Age AND Gender=$Gender AND Nationality=$Nationality AND Address=$Address"); 

if ($conn->query($sql) !== 0) {
  	echo '<center><img src="imag/victimsearch.jpg" height="220" width="250"/>';
  	echo '<br>';
    echo '<br>';
  	echo '<table border=1 height="100px" width="300px" align="center">';
  	echo '<tr>';
  	echo '<td height="25"> ';
  	echo 'Victim Name:</td> <td height="25">'.$Name.'</td></tr>';
  	echo '<tr><td height="25">Victim Age:</td> <td height="25">'.$Age.'</td></tr>';
  	echo '<tr><td height="25">Victim Gender:</td><td height="25"> '.$Gender.'</td></tr>';
  	echo '<tr><td height="25">Victim Address:</td><td height="25"> '.$Address.'</td></tr>';
  	echo '<tr><td height="25">Victim Nationality:</td><td height="25"> '.$Nationality.'</td></tr>';
  	echo "</table>";
  
    }else{
        echo 'Match Not Found';
    }
   
$conn->close();
?>