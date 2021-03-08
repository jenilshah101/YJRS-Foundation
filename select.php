<?php
$loc = $_POST["loc"];
$type = $_POST["type"];

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "disaster";
$msg="location:".$loc."\n Disaster type:".$type."\n Please give your input in google form below \n https://forms.gle/8g2p3hGCQbmMv2py8
";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email FROM volunteer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    mail($row['email'],"YJRS foundation",$msg);
        echo "<br> id: ". $row['email']. "<br>";
       
         echo '<script>window.open("https://docs.google.com/forms/d/1BnRujSTR7bf54lAF0j6-ofqL8nrPpeM3-ms5Yskcy_I/edit#responses","_blank")
</script>';
echo '<script>window.open("adminyjrs.html")
</script>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>