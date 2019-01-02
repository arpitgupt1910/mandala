<?php
$name = $_GET['name'];
$subject = $_GET['subject'];
$txt = $_GET['message'];
$to = "sathyahari9@gmail.com";
$headers = "From: " .$email. "\r\n" .
"CC: arpitgupta1910@gmail.com";

mail($to,$subject,$txt,$headers);

redirect('index.html','refresh');

?>