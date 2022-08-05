<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// office
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '1313chul');
// define('DB_NAME', 'maiwp');
// macbook air

// local
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '1313chul');
// define('DB_NAME', 'maiwp');

// live
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'syantek');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'BVA');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// $gmailid = ''; // YOUR gmail email
// $gmailpassword = ''; // YOUR gmail password
// $gmailusername = ''; // YOUR gmail User name