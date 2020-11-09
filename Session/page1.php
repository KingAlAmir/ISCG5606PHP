<?php
//start session
@session_start();
//get session value
$firstname= $_SESSION["firstname"];
echo "User Firstname:".$firstname;
?>