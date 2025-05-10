<?php
 if(isset($_FILES['file']))
 {
	 echo"<pre>";
	 print_r($_FILES['file']);
	  echo"</pre>";
	  
	echo $fil_name=$_FILES['file']['name'];
	echo $filSize=$_FILES['file']['size'];
	echo $tep=$_FILES['file']['tmp_name'];

  if(move_uploaded_file($tep,"Image/".$fil_name)){
		echo"upload suc";
	}else{
		echo"Fail ";
	}
 }
 ?>
 
 <!DOCKTYPE HTML>
<html>
<head>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="submit">
</form>

</body>

</html>