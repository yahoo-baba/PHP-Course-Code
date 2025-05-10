<!DOCTYPE html>
<html>
<body>

<form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  Marks: <input type="text" name="marks" autocomplete="off">

  <input type="submit" name="submit" value="Submit">
</form>
<br>
<?php
  if(isset($_REQUEST['submit'])){
    $options = array(
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    );
    if(filter_input(INPUT_POST,"marks", FILTER_VALIDATE_INT,$options)){
      echo "Marks is Valid.";
    }else{
      echo "Marks is not Valid.";
    }
  }





?>
</body>
</html>
