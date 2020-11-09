<?php
//start session
@session_start();
//get session value
$message = $_SESSION["message"];
echo "Message:".$message;
?>