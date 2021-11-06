<?php
   $host ='';
   $database='';
   $username='';
   $password='';
   
$conn=new mysqli($host, $username, $password, $database);

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
   
?>
