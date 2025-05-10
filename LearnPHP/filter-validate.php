<?php

$var = "FA-F9-DD-B2-5E-0D";


if(filter_var($var, FILTER_VALIDATE_MAC)){
  echo "<br>$var is valid MAC.";
}else{
  echo "<br>$var is not an valid MAC.";
}
?>
