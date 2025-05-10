<?php

$string = "php hypertext language programming";

$split = preg_split("/ /", $string,-1,PREG_SPLIT_OFFSET_CAPTURE);

echo "<pre>";
print_r($split);
echo "</pre>";

?>
