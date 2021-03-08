<?php
session_start();
$em=$_SESSION["eml"];
$amt=$_SESSION["am"];

  $msg = "Thankyou for your donation of Rs ".$amt."";
 
// use wordwrap() if lines are longer than 70 characters

// send email
mail($em,"YJRS foundation",$msg);
echo"mail sent";
header("Location:index.html");
?>
</body>
</html>