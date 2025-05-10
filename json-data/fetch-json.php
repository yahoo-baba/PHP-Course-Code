<?php 
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: GET");

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

//$sql = "SELECT * FROM students";
$sql = "SELECT * FROM students WHERE id = {$_POST['id']}";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);


?>