<?php
session_start();
$msg = "Name: ".$_POST["name"]."\n"."Email: ".$_POST["mail"]."\n"."Comments: ".$_POST["customoptions"]."\n"."Phone: ".$_POST["phone"]."\n";
$msg .= $_SESSION["case"]."\n".$_SESSION["processor"]."\n".$_SESSION["ram"]."\n".$_SESSION["gpu"]."\n".$_SESSION["store1"]."\n".$_SESSION["store2"]."\n".$_SESSION["media"]."\n".$_SESSION["OS"]."\n".$_SESSION["software"]."\n"; 
$msg = wordwrap($msg,70);
$subject = "Quote Request From: ".$_POST[name];
$header = "From: ".$_POST["mail"]."\r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/plain; charset=utf-8\r\n";
$header.= "X-Priority: 3\r\n";
mail("custompc13579@gmail.com", $subject, $msg, $header);
header('Location: thanks.html');
?>

