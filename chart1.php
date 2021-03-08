<?php
 session_start();
 $n=$_SESSION["nm"];
 $a=$_SESSION["amt1"];
$dataPoints = array( 
	array("y" => 5000, "label" => "Mumbai" ),
	array("y" => 3200, "label" => "Pune" ),
	array("y" => 4500, "label" => "Kolkata" ),
	array("y" => 1000, "label" => "Goa" ),
	array("y" => 2000, "label" => "Delhi" ),
	array("y" => 6000, "label" => "Surat" ),
	array("y" => $a, "label" =>$n)
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
	
<script style="padding-top:50%;">
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Donation Analysis"
	},
	axisY: {
		title: "Amount Donated"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body bgcolor="powderblue">
<div id="chartContainer" style="padding-left: 250px; padding-top: 100px; height: 370px; width: 50%;">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</body>
</html>                                