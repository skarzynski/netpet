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
$u10 = $_POST['facebook'];
$email = 'net-pet@o2.pl';
$temat = "Prośba o dodanie:   $u9 ";
$body_mail = "Nazwa:  $u1  
		E-mail:   $u2  
		Strona:  $u3  
		Ulica:   $u4 
		Kod pocztowy:  $u5  
		Miasto:   $u6 
		Numer telefonu:   $u7  
		Typ:   $u9 
		Opis:  $u8  
		facebook:   $u10  ";


mail($email,$temat,$body_mail);
header('Location: /');
$con->close();



?>