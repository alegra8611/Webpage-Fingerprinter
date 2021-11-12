<?php
   $flags_dir = '/var/www/html/Webpage-Fingerprinter/images/flags';  
   $host ='127.0.0.1';
   $database='server_obs';
   $username='';
   $password='';
   
$conn=new mysqli($host, $username, $password, $database);

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
   
?>
