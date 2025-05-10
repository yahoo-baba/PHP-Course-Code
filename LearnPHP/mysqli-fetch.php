<?php

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql) or die("Query Failed");

//$row = mysqli_fetch_field($result);
while($field = mysqli_fetch_field($result)){
  echo $field->name . " ". $field->max_length. "<br>";
}

/*while($row = mysqli_fetch_row($result)){
  echo $row[1] . " " . $row[2]. "<br>";
}
*/

?>
