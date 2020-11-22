<?php
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$sname = $_POST['sname'];
$semail = $_POST['semail'];
$scity = $_POST['scity'];
$saddress = $_POST['saddress'];
$szip = $_POST['szip'];
$scountry = $_POST['scountry'];

if (!empty($name)|| !empty($email)|| !empty($city)|| !empty($address)|| !empty($zip)|| !empty($country)|| !empty($sname)|| !empty($semail)|| !empty($scity)|| !empty($saddress)|| !empty($szip)|| !empty($scountry)){
    $server = "kf3k4aywsrp0d2is.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $dbusername = "vy6x4wlh7erapgil";
    $dbpassword = "seteqj3cpkfycdnt";
    $dbname = "ax3lru44vm27m7md";
	
	 //create connection
	$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);
	
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$SELECT = "SELECT email From register Where email = ? Limit 1";
		$INSERT = "INSERT Into register (name, email, city, address, zip, country, sname, semail, scity, saddress, szip, scountry) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		
		//Prepare statement
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		if ($rnum==0){
			$stmt->close();
			
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssisssssis", $name, $email, $city, $address, $zip, $country, $sname, $semail, $scity, $saddress, $szip, $scountry);
			$stmt->execute();
			echo "New record inserted sucessfully";
			
		} else {
			echo "Someone already register using this email";
		}
		$stmt->close();
		$conn->close();
	}
	
} else {
	echo "All field are required";
	die();
}
?>