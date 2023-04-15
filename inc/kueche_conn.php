<?php

$hostname     = "localhost"; // enter your hostname
$username     = "root";  // enter your table username
$password     = "";   // enter your password
$databasename = "kueche";  // enter your database
// Create connection 
$kueche_conn = new mysqli($hostname, $username, $password,$databasename);
 // Check connection 
if ($kueche_conn->connect_error) { 
die("Unable to Connect database: " . $kueche_conn->connect_error);
}




// $conn = mysqli_connect('localhost', 'root', '', 'register');
// if(!$conn){
//     echo 'Error: ' . mysqli_connect_error();
// }



?>

