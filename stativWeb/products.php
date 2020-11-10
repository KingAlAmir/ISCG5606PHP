<?php
$server = "kf3k4aywsrp0d2is.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbusername = "vy6x4wlh7erapgil";
$dbpassword = "seteqj3cpkfycdnt";
$dbname = "ax3lru44vm27m7md";

$conn = new mysqli($server, $dbusername, $dbpassword, $dbname);

$sql = "select * from users";

// show my result
while ($row = $result->fetch_assoc()) {
    echo $row["id"];
    echo $row["productName"];
    echo $row["productPrice"];
    echo $row["productImage"];
    echo $row["category"];

}