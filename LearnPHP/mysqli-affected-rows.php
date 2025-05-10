<?php

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "DELETE FROM students WHERE id > 2";
$result = mysqli_query($conn, $sql) or die("Query Failed");

echo "Total Rows : " . mysqli_affected_rows($conn);


?>
