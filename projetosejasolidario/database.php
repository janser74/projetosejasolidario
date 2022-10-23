<?php
$servername = "localhost";
$database = "sejasolidario";
$user = "root";
$pass = "";

$conn = new PDO("mysql:dbname=$database; host=$servername", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$item = $_POST['item'];
$category = $_POST['category'];
$contact = $_POST['contact'];
$desc = $_POST['desc'];




$sql = "INSERT INTO donation (`item`, `category`, `contact`, `desc`) VALUES ('$item', '$category', '$contact','$desc')";

$resultados = $conn->prepare($sql);

$resultados->execute();

return true;



