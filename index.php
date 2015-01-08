<?php
include 'Classes/DbConnection.php';
$conn= new DbConnection();

$conn->connectDb();

$query="SELECT * FROM foi_users";

$conn->queryDb($query);


$conn->disconnectDb();


?>