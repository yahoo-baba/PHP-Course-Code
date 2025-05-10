<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP with Ajax</title>
  <style media="screen">
    body{
      font-family: arial;
      background: #b2bec3;
      padding:0;
      margin: 0;
    }
    h1{
      text-align: center;
      margin: 15px;
    }
    #main{
      width: 700px;
      margin: 0 auto;
      background: white;
      font-size: 19px;
    }
    #header{
      background: #f7d794;
    }
    #table-form{
      background: #55efc4;
      padding: 20px 10px;
    }
    #table-data{
      padding: 15px;
      height: 500px;
      vertical-align: top;
    }
    #table-data th{
      background: #74b9ff;
    }
    #table-data tr:nth-child(odd){
      background: #ecf0f1;
    }
    #success-message{
      background: #DEF1D8;
      color: green;
      padding: 10px;
      margin: 10px;
      display: none;
      position: absolute;
      right: 15px;
      top: 15px;
    }
    #error-message{
      background: #EFDCDD;
      color: red;
      padding: 10px;
      margin: 10px;
      display: none;
      right: 15px;
      top: 15px;
    }
  </style>
</head>
<body>
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>PHP with Ajax</h1>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        First Name : <input type="text" id="fname">
        Last Name : <input type="text" id="lname">
        <input type="submit" id="save-button" value="Save">
      </td>
    </tr>
    <tr>
      <td id="table-data">
        <table border="1" width="100%" cellspacing="0" cellpadding="10px">
          <tr>
            <th>Id</th>
            <th>Name</th>
          </tr>
          <tr>
            <td align="center">1</td>
            <td>Yahoo Baba</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
<div id="success-message"></div>
<div id="error-message"></div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    function loadTable(page){
          $.ajax({
            url: "ajax-load.php",
            type : "POST",
            success: function(data){
                $("#table-data").html(data);
            }
         });
    }

    loadTable(); // Run on page load

    $("#save-button").on("click",function(e){
      e.preventDefault();
      var fname = $("#fname").val();
      var lname = $("#lname").val();

      if(fname == "" || lname == ""){
        $("#error-message").html("All Fields are required.").slideDown();
        $("#success-message").slideUp();
      }else{
        $.ajax({
          url: "ajax-savedata.php",
          type : "POST",
          data :{first_name:fname,last_name:lname},
          success: function(data){
             $("#success-message").html("Data Inserted Successfully.").slideDown();
             $("#error-message").slideUp();
          //    $("#addForm").trigger("reset");
            $("#table-data").html(data);
          },
          error: function(data){
           $("#error-message").html("Can't Insert Data.").slideDown();
           $("#success-message").slideUp();
          }
        });
      }

    });

});
</script>
</body>
</html>
