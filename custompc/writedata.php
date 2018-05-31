<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
 $txt = "Case: ".$_POST["Case"]."<br>"."\n";
 if ($_POST["Case"]==null) {
         $txt = "Case: Value<br>\n";
 }
	fwrite($myfile, $txt);
	$txt = "Processor: ".$_POST["Processor"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Memory: ".$_POST["RAM"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Graphics: ".$_POST["GPU"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Disk1: ".$_POST["Disk1"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Disk2: ".$_POST["Disk2"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Media Player: ".$_POST["CD"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Operating System: ".$_POST["OS"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Office Software: ".$_POST["Software"]."<br>"."\n";
	fwrite($myfile, $txt);
	fclose($myfile);
        
$i = 0;
while (file_exists("quotes/quote".$i.".txt")) {
	$i++;
 }    
	$myfile = fopen("quotes/quote".$i.".txt", "w") or die("Unable to open file!");
 $txt = "Case: ".$_POST["Case"]."<br>"."\n";
 if ($_POST["Case"]==null) {
         $txt = "Case: Value<br>\n";
 }
	fwrite($myfile, $txt);
	$txt = "Processor: ".$_POST["Processor"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Memory: ".$_POST["RAM"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Graphics: ".$_POST["GPU"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Disk1: ".$_POST["Disk1"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Disk2: ".$_POST["Disk2"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Media Player: ".$_POST["CD"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Operating System: ".$_POST["OS"]."<br>"."\n";
	fwrite($myfile, $txt);
	$txt = "Office Software: ".$_POST["Software"]."<br>"."\n";
	fwrite($myfile, $txt);
	fclose($myfile);
 header('Location: Quotepage.htm');
?> 