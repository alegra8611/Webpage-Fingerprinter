<?php
$host ='';
$database='network_recon';
$username='';
$password='';
$conn=new mysqli($host, $username, $password, $database);
		
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
require('UserInfo.php');
$ip= UserInfo::get_ip();
$os= UserInfo::get_os();
$brow= UserInfo::get_browser();
$Fingerprint = $_POST['Device_Fingerprint'];
$sql = "INSERT INTO recon (Device_Fingerprint, ipAddress, Operating_System, Browser) VALUES 
('$Fingerprint', '$ip', '$os', '$brow')";


if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
}
?>



	
