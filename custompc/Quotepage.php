<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Custom Computers-Summary & Payment</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<?php
if ($_POST["Case"]==null) {
	$_POST["Case"] = "Rosewill FBM01";
}

$_SESSION["case"] = $_POST["case"];
$_SESSION["processor"] = $_POST["Processor"];
$_SESSION["ram"] = $_POST["RAM"];
$_SESSION["gpu"] = $_POST["GPU"];
$_SESSION["store1"] = $_POST["Disk1"];
$_SESSION["store2"] = $_POST["Disk2"];
$_SESSION["media"] = $_POST["CD"];
$_SESSION["OS"] = $_POST["OS"];
$_SESSION["software"] = $_POST["Software"];
?>

<body class="inputpage">

<h1><a href="index.htm" class="logo"><b>Custom Computers</b></a></h1>
<div id="wrapper">
<div class="main">
	<div id="quotediv">
		<div id="Buyerinfo">
			<form id="submittingform" action="sendall.php" method="post">
				Name:<br>
				<input type="text" class="boxes" name="name" required><br>
				E-mail:<br>
				<input type="text" class="boxes" name="mail" required><br>
				Additional Requirements:<br>
				<textarea class="customizetextarea" name="customoptions" required></textarea><br>
				Phone Number (Optional):<br>
				<input type="text" class="boxes" name="phone">
				<input type="submit" id="quotebutton" value="Get Quote!">
			</form>
		</div>
		<div id="summary">
			<p id="sumdisplay">
				Case: <?php echo $_POST["Case"]; ?> <br>
				Processor: <?php echo $_POST["Processor"]; ?> <br>
				Memory: <?php echo $_POST["RAM"]; ?> <br>
				Graphics: <?php echo $_POST["GPU"]; ?> <br>
				Disk1: <?php echo $_POST["Disk1"]; ?> <br>
				Disk2: <?php echo $_POST["Disk2"]; ?> <br>
				Media Player: <?php echo $_POST["CD"]; ?> <br>
				Operating System: <?php echo $_POST["OS"]; ?> <br>
				Office Software: <?php echo $_POST["Software"]; ?> <br>
			</p>
		</div>  
	</div>   
</div>
</div>
<div id="footer">
	<div class="foot">
		Do you have questions or concerns? Send e-mail to: custompc13579@gmail.com
	</div>
	<div class="foot">
		<a href="https://www.facebook.com/custompc12579/" class="logo" target="_blank"><img class="icons" src="images/facebook.png" alt="facebook"></a>
		<a href="https://www.youtube.com/watch?v=Z7dNXramIIY" class="logo" target="_blank"><img class="icons" src="images/youtube.png" alt="youtube"></a>
		<a href="mailto:custompc13579@gmail.com?Subject=Question/Concern" class="logo" target="_top"><img class="icons" src="images/mail.png" alt="email"></a>
	</div>
	<div class="foot">
		Need help choosing components?  Visit the <a href="FAQ.htm" id="FAQ" target="_blank">FAQ</a>
	</div>
</div>
</body>
</html>
