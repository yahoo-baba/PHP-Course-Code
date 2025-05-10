<?php
$per = 47;

if($per >= 80 && $per <=100):
  echo "Your are in Merit.";
elseif($per >= 60 && $per < 80):
  echo "Your are in Ist Division.";
elseif($per >= 45 && $per < 60):
  echo "Your are in IInd Division.";
elseif($per >= 33 && $per < 45):
  echo "Your are in IIIrd Division.";
elseif($per < 33):
  echo "Your are Fail.";
else:
  echo "Please Enter Valid Percentage.";
endif;


?>
