require('connect.php');
require('UserInfo.php');
$ip= UserInfo::get_ip();
$os= UserInfo::get_os();
$brow= UserInfo::get_browser();
$Fingerprint = $_POST['Device_Fingerprint'];
$location_status = $_POST['current_location'];
$incog_status = $_POST['incog'];
$vpn_status = $_POST['vpn'];
$sql = "INSERT INTO recon (Device_Fingerprint, ipAddress, Operating_System, Browser, location, incognitos, vpn_detect) VALUES 
('$Fingerprint', '$ip', '$os', '$brow', '$location_status', '$incog_status', '$vpn_status')";


if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
}

$conn=new mysqli($host, $username, $password, $database);
		
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$stamp = "UPDATE recon SET time_created= now() WHERE Device_Fingerprint='$Fingerprint'";

if (mysqli_query($conn, $stamp)) {
	mysqli_close($conn);
}

if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
}

$conn=new mysqli($host, $username, $password, $database);

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE recon SET location= '$location_status' WHERE Device_Fingerprint='$Fingerprint'";

if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
}


$conn=new mysqli($host, $username, $password, $database);

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE recon SET ipAddress= '$ip' WHERE Device_Fingerprint='$Fingerprint'";

if (mysqli_query($conn, $sql)) {
	mysqli_close($conn);
}

$conn=new mysqli($host, $username, $password, $database);

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$mode = "UPDATE recon SET incognitos= '$incog_status' WHERE Device_Fingerprint='$Fingerprint'";

if (mysqli_query($conn, $mode)) {
	mysqli_close($conn);
}

$conn=new mysqli($host, $username, $password, $database);

if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

$mode = "UPDATE recon SET vpn_detect= '$vpn_status' WHERE Device_Fingerprint='$Fingerprint'";

if (mysqli_query($conn, $mode)) {
	mysqli_close($conn);
}



	
