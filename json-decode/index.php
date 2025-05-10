<?php 

$json_string = 'json/my.json';

$jsondata = file_get_contents($json_string);

$arr = json_decode($jsondata, true);

echo '<table border="1" cellpadding="10px" width="100%">';

foreach($arr as list("id" => $id, "name" => $name, "age" => $age, "city" => $city)){
	echo "<tr><td>{$id}</td><td>{$name}</td><td>{$age}</td><td>{$city}</td></tr>";
}

echo '</table>';

// echo "<pre>";
// print_r($arr);
// echo "</pre>";


?>