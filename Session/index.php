<?php
//start a session
@session_start();
//set values to session variables
//$_SESSION["username"] = "Amir";
//$_SESSION["password"] = "Sarkhosh";
//$_SESSION["color"] = "red";
//$_SESSION["Address"]= "7 Azure Grove";
if (isset($_POST["message"])){
	echo "<p>I have a post message in this page</p>";
	@session_start();
	$_SESSION["message"]
}else{
	echo "<p>Please post a message to me</p>";
}
?>
<html>
<head>
<title>Index</title>	
</head>

<body>
	<li><a href="page1.php">Page 1</a></li>
	<li><a href="page2.php">Page 2</a></li>
	<li><a href="page3.php">Page 3</a></li>
	<li><a href="page4.php">Page 4</a></li>
	<li><a href="page5.php">Page 5</a></li>
	<li><a href="page6.php">Page 6</a></li>
	<li><a href="page7.php">Page 7</a></li>
	<li><a href="page8.php">Page 8</a></li>
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method=="post">
	<input name="message" type="text" placeholder="message here">
	<input type="submit" value="Post">
	</form>
</body>

</html>
