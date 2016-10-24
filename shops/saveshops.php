<?php
$servername = "localhost";
$username = "p491607_root";
$password = "fvecrqcj";
$dbn = "p491607_netpet";

// Create connection
$con = new mysqli($servername, $username, $password, $dbn);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
$u1 = $_POST['name'];
$u2 = $_POST['email'];
$u3 = $_POST['website'];
$u4 = $_POST['street'];
$u5 = $_POST['post_code'];
$u6 = $_POST['city'];
$u7 = $_POST['phone_number'];

$u9 = $_POST['type'];
$u8 = $_POST['description'];
$done = "INSERT INTO zooshops (name, email, street, post_code, city, phone_number, website, type, description) VALUES ($u1, $u2, $u4, $u5, $u6, $u7, $u3, $u9, $u8)";

if ($con->query($done) === TRUE) {
    echo "Dodano";
} else {
    echo "Error: " . $con->error;
}

$con->close();



?>