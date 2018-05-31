<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Custom Computers-Specs</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body class="inputpage">

<h1><a href="index.htm" class="logo"><b>Custom Computers</b></a></h1>

<div class="main">
	<p class="intext" >Choose components and click the 'Summary and Quote' button at the bottom when finished.</p>
	<div id="casepicselect">
	<p class="component">Case</p>	
  			<select name="tower" id="towertype" onchange="makemenugood()">
    			<option id="CMOP" value="CoolM">CoolerMaster</option>
    			<option id="NZXTOP" value="NZXT" >NZXT</option>
    			<option id="COROP" value="Corsair">Corsair</option>
				<option value="Economy" id="cheapcase" selected>Economy Case ($30)</option>
			</select><br><br>

	<form class="parts" id="bigone" method="post"  action="Quotepage.php">
	
		<div id="CoolM" class="cases">
			<input type="radio" name="Case" id="case7" value="CM Elite 130" onchange="mainfunction()">CoolerMaster Elite 130<br>
			<input type="radio" name="Case" id="case3" value="CM HAF 912" onchange="mainfunction()">CoolerMaster HAF 912<br>
			<input type="radio" name="Case" id="case10" value="CM HAF 932" onchange="mainfunction()">CoolerMaster HAF 932<br>
		</div>
		<div id="NZXT" class="cases">
			<input type="radio" name="Case" id="case4" value="NZXT H230" onchange="mainfunction()">NZXT H230<br>
			<input type="radio" name="Case" id="case12" value="NZXT Phantom" onchange="mainfunction()">NZXT Phantom<br>
			<input type="radio" name="Case" id="case11" value="NZXT H440" onchange="mainfunction()">NZXT H440<br>
			<input type="radio" name="Case" id="case8" value="NZXT Manta" onchange="mainfunction()">NZXT Manta<br>
		</div>
		<div id="Corsair" class="cases">
			<input type="radio" name="Case" id="case2" value="Carbide 100R" onchange="mainfunction()">Corsair Carbide 100R<br>
			<input type="radio" name="Case" id="case5" value="Carbide Air 240" onchange="mainfunction()">Corsair Carbide Air 240<br>
			<input type="radio" name="Case" id="case1" value="Obsidian 450D" onchange="mainfunction()">Corsair Obsidian 450D<br>
			<input type="radio" name="Case" id="case9" value="Obsidian 750D" onchange="mainfunction()">Corsair Obsidian 750D<br>
			<input type="radio" name="Case" id="case6" value="Carbide Graphite 380T" onchange="mainfunction()">Corsair Carbide Graphite 380T<br>		
		</div>
	
	<div class="compwlink">Processor<div class="cpuboss">(Get a side by side comparison at <a href="http://cpuboss.com" target="_blank">CPUboss.com)</a></div></div>
  		<input type="radio" id="Processor1" name="Processor" value="AMD Ryzen 7 1700">AMD Ryzen 7 1700 3.0GHz 8-Core<br>
   		<input type="radio" id="Processor2" name="Processor" value="AMD Ryzen 7 1700X">AMD Ryzen 7 1700X 3.4GHz 8-Core<br>
  		<input type="radio" id="Processor3" name="Processor" value="AMD Ryzen 7 1800X">AMD Ryzen 7 1800X 3.6GHz 8-Core<br>
		<input type="radio" id="Processor4" name="Processor" value="Intel i5-7600" checked> Intel Core i5-7600 3.4GHz Quad Core<br>
  		<input type="radio" id="Processor5" name="Processor" value="Intel i7-7700"> Intel Core i7-7700 3.4GHz Quad Core<br>
		<input type="radio" id="Processor6" name="Processor" value="Intel i7-6950X"> Intel Core i7-6950X 3.6GHz 10-Core<br>
		
	<p class="component">RAM</p>
  		<input type="radio" id="Ram1" name="RAM" value="4GB"> 4GB
   		<input type="radio" id="Ram2" name="RAM" value="8GB" checked> 8GB<br>
  		<input type="radio" id="Ram3" name="RAM" value="16GB"> 16GB
		<input type="radio" id="Ram4" name="RAM" value="32GB"> 32GB
	
	<div class="compwlink">Graphics<div class="cpuboss">(Get a side by side comparison at <a href="http://gpuboss.com" target="_blank">GPUboss.com)</a></div></div>
		<input type="radio" id="GPU1" name="GPU" value="Integrated" checked> CPU Integrated Graphics<br>
		<input type="radio" id="GPU2" name="GPU" value="AMD Radeon RX480"> AMD Radeon RX480<br>
  		<input type="radio" id="GPU3" name="GPU" value="Nvidia GTX 1060"> Geforce GTX 1060<br>
		<input type="radio" id="GPU4" name="GPU" value="Nvidia GTX 1070"> Geforce GTX 1070<br>
		<input type="radio" id="GPU5" name="GPU" value="Nvidia GTX 1080"> Geforce GTX 1080<br>
		<input type="radio" id="GPU6" name="GPU" value="Nvidia GTX 1080Ti"> Geforce GTX 1080Ti<br>
	 
	<p class="component">Hard Disk 1</p>
		<input type="radio" id="HDD1" name="Disk1" value="500 GB HDD" checked> 500GB HDD
  		<input type="radio" id="HDD2" name="Disk1" value="120 GB SSD"> 120GB SSD<br>
   		<input type="radio" id="HDD3" name="Disk1" value="1 TB HDD"> 1TB HDD &nbsp &nbsp 
		<input type="radio" id="HDD4" name="Disk1" value="250 GB SSD"> 250GB SSD<br>
  		<input type="radio" id="HDD5" name="Disk1" value="2 TB HDD"> 2TB HDD &nbsp &nbsp 
		<input type="radio" id="HDD6" name="Disk1" value="500 GB SSD"> 500GB SSD<br>
		<input type="radio" id="HDD7" name="Disk1" value="4 TB HDD"> 4TB HDD &nbsp &nbsp 
		<input type="radio" id="HDD8" name="Disk1" value="1 TB SSD"> 1TB SSD &nbsp &nbsp 
	
	<p class="component">Hard Disk 2 (Optional)</p>
		<input type="radio" id="HDD9" name="Disk2" value="NO HDD" checked> None<br>
  		<input type="radio" id="HDD10" name="Disk2" value="500 GB HDD"> 500GB HDD
  		<input type="radio" id="HDD11" name="Disk2" value="120 GB SSD"> 120GB SSD<br>
   		<input type="radio" id="HDD12" name="Disk2" value="1 TB HDD"> 1TB HDD &nbsp &nbsp 
		<input type="radio" id="HDD13" name="Disk2" value="250 GB SSD"> 250GB SSD<br>
  		<input type="radio" id="HDD14" name="Disk2" value="2 TB HDD"> 2TB HDD &nbsp &nbsp 
		<input type="radio" id="HDD15" name="Disk2" value="500 GB SSD"> 500GB SSD<br>
		<input type="radio" id="HDD16" name="Disk2" value="4 TB HDD"> 4TB HDD &nbsp &nbsp 
		<input type="radio" id="HDD17" name="Disk2" value="1 TB SSD"> 1TB &nbsp &nbsp SSD
	
	<p class="component">CD-ROM/Blu-Ray Player</p>
  		<input type="radio" id="MP1" name="CD" value="NO DVD" checked> None
   		<input type="radio" id="MP2" name="CD" value="DVD Burner"> DVD-ROM<br>
  		<input type="radio" id="MP3" name="CD" value="BLU-RAY Burner"> Blu-Ray/DVD Combo
	
	<p class="component">Operating System</p>
  		<input type="radio" id="OS1" name="OS" value="NONE" checked> None<br>
   		<input type="radio" id="OS2" name="OS" value="Windows 10 Home 64-bit"> Windows 10 Home 64-bit<br>
		<input type="radio" id="OS3" name="OS" value="Windows 10 Pro 64-bit"> Windows 10 Pro 64-bit<br>
  		<input type="radio" id="OS4" name="OS" value="UBUNTU"> Ubuntu 16.04.1 (Free)
	
	<p class="component">Office</p>
  		<input type="radio" id="office1" name="Software" value="NONE" checked> None<br>
   		<input type="radio" id="office2" name="Software" value="Microsoft Office 2016 Home & Student"> Microsoft Office 2016 Home and Student<br>
		<input type="radio" id="office3" name="Software" value="Libre Office"> Libre Office (Free)<br>
	<br><br>
	<input type="submit" id="finalizebutton" value="Summary and Quote">
	</div><br><br>
	<img id="casepreview" src="images/RosewillFBM-01.jpg" alt="preview">
	</form>
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

<script>
function makemenugood() {
	var CMcase = document.getElementById("CoolM");
	var NZXTcase = document.getElementById("NZXT");
	var Corsaircase = document.getElementById("Corsair");
	document.getElementById("case1").checked = false;
	document.getElementById("case2").checked = false;
	document.getElementById("case3").checked = false;
	document.getElementById("case4").checked = false;
	document.getElementById("case5").checked = false;
	document.getElementById("case6").checked = false;
	document.getElementById("case7").checked = false;
	document.getElementById("case8").checked = false;
	document.getElementById("case9").checked = false;
	document.getElementById("case10").checked = false;
	document.getElementById("case11").checked = false;
	document.getElementById("case12").checked = false;
	if (document.getElementById("towertype").value=="Economy") {
		document.getElementById("casepreview").src="images/RosewillFBM-01.jpg";
	}
	if (document.getElementById("towertype").value =="CoolM") {
		CMcase.style.display = "inline";
		NZXTcase.style.display = "none";
		Corsaircase.style.display = "none";
	} else if (document.getElementById("towertype").value =="NZXT") {
		CMcase.style.display = "none";
		NZXTcase.style.display = "inline";
		Corsaircase.style.display = "none";
	} else if (document.getElementById("towertype").value =="Corsair") {
		CMcase.style.display = "none";
		NZXTcase.style.display = "none";
		Corsaircase.style.display = "inline";
	} else if (document.getElementById("towertype").value =="Economy") {
		CMcase.style.display = "none";
		NZXTcase.style.display = "none";
		Corsaircase.style.display = "none";
	}
}

function mainfunction() {
	var case1 = document.getElementById("case1").checked;
	var case2 = document.getElementById("case2").checked;
	var case3 = document.getElementById("case3").checked;
	var case4 = document.getElementById("case4").checked;
	var case5 = document.getElementById("case5").checked;
	var case6 = document.getElementById("case6").checked;
	var case7 = document.getElementById("case7").checked;
	var case8 = document.getElementById("case8").checked;
	var case9 = document.getElementById("case9").checked;
	var case10 = document.getElementById("case10").checked;
	var case11 = document.getElementById("case11").checked;
	var case12 = document.getElementById("case12").checked;
	
	if(case1==true){
		document.getElementById("casepreview").src = "images/Mid-CorsairObsidian450D.jpg"; 
	}
	if(case2==true){
		document.getElementById("casepreview").src="images/Mid-CorsairCarbide100R.png";
	}
	if(case3==true){
		document.getElementById("casepreview").src="images/Mid-CoolermasterHAF912.jpg";
	}
	if(case4==true){
		document.getElementById("casepreview").src="images/Mid-NZXTH230.jpg";
	}	
	if(case5==true){
		document.getElementById("casepreview").src="images/Mini-CorsairCarbideAir240.png";
	}
	if(case6==true){
		document.getElementById("casepreview").src="images/Mini-CorsairGraphite380T.png";
	}
	if(case7==true){
		document.getElementById("casepreview").src="images/Mini-CoolermasterElite130.jpg";
	}
	if(case8==true){
		document.getElementById("casepreview").src="images/Mini-NZXTmanta.jpg";
	}
	if(case9==true){
		document.getElementById("casepreview").src="images/Full-CorsairObsidian750D.png";
	}
	if(case10==true){
		document.getElementById("casepreview").src="images/Full-CoolermasterHAF932.jpg";
	}
	if(case11==true){
		document.getElementById("casepreview").src="images/Full-NZXTH440.jpg";
	}
	if(case12==true){
		document.getElementById("casepreview").src="images/Full-NZXTPhantom.jpg";
	}
}
</script>

<?php
$type = $_GET["assembly"];
if ($type=="basemodel") {
echo
	'<script>
		document.getElementById("HDD3").checked = true;
		document.getElementById("OS2").checked = true;
	</script>';
}
elseif ($type=="StrikerGMQ"){
	echo
	'<script>
		document.getElementById("CMOP").selected = true;
        document.getElementById("CoolM").style.display="inline";
		document.getElementById("case7").checked = true;
		document.getElementById("Processor1").checked = true;
		document.getElementById("GPU2").checked = true;
		document.getElementById("HDD2").checked = true;
		document.getElementById("HDD12").checked = true;
		document.getElementById("OS2").checked = true;
		mainfunction();
	</script>';
}
elseif ($type=="CommandoR190"){
	echo
	'<script>
		document.getElementById("CMOP").selected = true;
        document.getElementById("CoolM").style.display="inline";
		document.getElementById("case3").checked = true;
		document.getElementById("Processor5").checked = true;
		document.getElementById("GPU4").checked = true;
		document.getElementById("HDD4").checked = true;
		document.getElementById("HDD12").checked = true;
		document.getElementById("MP2").checked = true;
        document.getElementById("OS2").checked = true;
		mainfunction();
	</script>';
}
elseif ($type=="UltraYettiXT"){
	echo
	'<script>
		document.getElementById("NZXTOP").selected = true;
        document.getElementById("NZXT").style.display="inline";
		document.getElementById("case11").checked = true;
		document.getElementById("Processor3").checked = true;
		document.getElementById("Ram4").checked = true;
		document.getElementById("GPU5").checked = true;
		document.getElementById("HDD4").checked = true;
		document.getElementById("HDD14").checked = true;
		document.getElementById("MP2").checked = true;
		document.getElementById("OS3").checked = true;
		mainfunction();
	</script>';
}
elseif ($type=="BlackBetty9000"){
	echo
	'<script>
		document.getElementById("COROP").selected = true;
        document.getElementById("Corsair").style.display="inline";
		document.getElementById("case9").checked = true;
		document.getElementById("Processor6").checked = true;
		document.getElementById("Ram4").checked = true;
		document.getElementById("GPU6").checked = true;
		document.getElementById("HDD8").checked = true;
		document.getElementById("HDD16").checked = true;
		document.getElementById("MP3").checked = true;
		document.getElementById("OS3").checked = true;
		mainfunction();
	</script>';
}
?>
</body>
</html>
