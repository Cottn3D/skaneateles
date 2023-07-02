<?php 

$mysqli = new mysqli('localhost', 'cjs3412', 'Conveyancer9!subtreasury', 'cjs3412');

// Check connection
if($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}



// Alternative way of doing same thing (credentials are for a different DB)

/* $servername = "cad.rit.edu";
$username = "646cemetery";
$password = "urkH8qjHWMmv";
$dbname = "646cemetery";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} */

?>