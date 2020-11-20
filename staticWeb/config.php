<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'kf3k4aywsrp0d2is.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USERNAME', 'vy6x4wlh7erapgil');
define('DB_PASSWORD', 'seteqj3cpkfycdnt');
define('DB_NAME', 'ax3lru44vm27m7md');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>