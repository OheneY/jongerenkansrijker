<?php 

include 'database.php';

$sql = "INSERT INTO medewerker VALUES (:id, :username, :password)";


$placeholders = [
    'id'=> NULL,
    'username'=> 'Admin',
    'password'=> password_hash('welkom01', PASSWORD_DEFAULT)
];

$db = new database();
$db->insert($sql, $placeholders);
?>