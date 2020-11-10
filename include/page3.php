<?php
if (isset($_POST["username"]) && isset($_POST["password"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    //1. create a database connection
    $server = "";
    $dbusername = "";
    $dbpassword = "";
    $dbname = "";

    $conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

    //2. create query
    $sql = "select * from users 
    where username = '$username'  and password = '$password'"";
    echo $sql;
}
?>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method=="post">
    <input name="username" type="text" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <input type="submit" value="Post">
</form>