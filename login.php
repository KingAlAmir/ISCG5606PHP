<?php
$username = $_POST["username"];
$password = $_POST["password"];

echo "Username:" . $username;
echo "Password:" . $password;

//create a database connection
$server = "";
$dbusername = "";
$dbpassword = "";
$dbname = "";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

if ($conn->error) {
    echo $conn->error;
} else {
    echo "Connected";
}

//create a query
$sql = "select * from users 
where username = '" . $username . "' and password = '" . $password."'";
echo $sql;
//run my query
$result = mysqli_query($conn, $sql);

//show result
if ($result->num_rows == 1) {
    echo "you have login";
    while ($row = $result->fetch_assoc()) {
        echo $row["firstname"];
        //start a sesttion
        @session();
        //set
        $s
    }
} else {
    echo "wrong username or password";
}