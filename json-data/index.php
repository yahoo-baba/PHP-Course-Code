<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP with Ajax & JSON</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
      <h1>PHP with Ajax & JSON</h1>
    </div>

    <div id="load-data">
      <table id="load-table" border="1" cellpadding="10px" width="100%">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Age</th>
          <th>City</th>
        </tr>
      </table>
    </div>

  </div>

<script type="text/javascript" src="js/jquery.js"></script>
<script>
  $.ajax({
    url : "fetch-json.php",
    type : "POST",
    data : { id : 4 },
    dataType : "JSON",
    success : function(data){
      $.each(data,function(key,value){
        $("#load-table").append("<tr><td>" + value.id + "</td><td>" + value.student_name + "</td><td>" + value.age + "</td><td>" + value.city + "</td></tr>");
      })
      //console.log(data);
    }
  });
  /*$.getJSON(
    "fetch-json.php",
    function(data){
      $.each(data,function(key,value){
        $("#load-data").append(value.id + " " + value.student_name + " " + value.age + " " + value.city + "<br>");
      })
      //console.log(data);
    }
  );*/
</script>

</body>
</html>
