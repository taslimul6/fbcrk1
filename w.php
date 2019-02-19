<?php
ob_start();

$name= $_POST["name"];
$mail= $_POST["email"]; 

 $data = "$name".","."$mail";


 $file='file';
file_put_contents($file,$data . PHP_EOL, FILE_APPEND);

header('Location: http://www.fb.com/');


?>