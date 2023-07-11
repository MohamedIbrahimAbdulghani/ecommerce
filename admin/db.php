<?php


$host = "localhost";
$user = "root";
$password = "";
$dbname = "ecommerce-shop";



$connection_database = new mysqli($host, $user, $password, $dbname);





// $dsn = "mysql:host=localhost;dbname=ecommerce-shop";
// $user = "root";
// $pass = "";


// try {
//     $connection_database = new PDO($dsn, $user, $pass);
//     $connection_database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "You Are Connected Welcome To Database";
// } catch(PDOException $exc) {
//     echo "Failed To Connect " . $exc->getMessage();
// }