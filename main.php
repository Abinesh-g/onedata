<?php
if(isset($_POST['insert']))
{
    header("location: insertId.php"); 
}
if(isset($_POST['insertEmployeeId']))
{
    header("location: insertEmployeeId.php"); 
}
if(isset($_POST['view']))
{
    header("location: viewId.php");   
}
if(isset($_POST['update']))
{
    header("location: updateId.php");  
}
if(isset($_POST['delete']))
{
    header("location: deleteId.php");  
}
if(isset($_POST['export']))
{
    header("location: ExportHtml.php");    
}
?>
<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
footer { 

    
} 
 body {
  background: url('EIS_Admin-Bg-06.jpg');
  background-repeat:no-repeat;
  overflow:auto;  
  background-size:cover;
 } 
 .center {
  margin: auto;
  width:250px;
  padding: 10px;
}
</style>
<title>ONEDATA </title>
</head>

<body>



 <nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

       <div class="container">
       <div class="col-3"></div>
        <div class="col-6">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
                 
     <ul class="nav navbar-nav navbar-right">
       <a href="index.php" class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
    </ul>  
  </nav>


<nav>
<div class="container">
<form method="post" style="padding-top:100px" action="">
  <div class="center">
     
         
        <input class="btn btn-secondary btn-block" type="submit" value="INSERT DETAILS" style="height:35px;" name="insert" ><br>
        <input class="btn btn-secondary btn-block" type="submit" value="INSERT EMPLOYEE ID"style="height:35px;" name="insertEmployeeId" ><br>
        <input class="btn btn-secondary btn-block" type="submit" value="VIEW DETAILS"style="height:35px;" name="view" ><br>
        <input class="btn btn-secondary btn-block" type="submit" value="UPDATE DETAILS"style="height:35px;" name="update" ><br>
        <input class="btn btn-secondary btn-block" type="submit" value="DELETE DETAILS"style="height:35px;" name="delete" ><br>
        <input class="btn btn-secondary btn-block" type="submit" value="EXPORT DATA TO EXCEL"style="height:35px;" name="export" ><br><br><br><br><br> 
     



    <footer style="padding-bottom: 0%;">
    <p class="mt-2 mb-3 text-center" >&copy; Onedata Software Solution Pvt Ltd. All Rights Reserved</p>
    </footer>
</div>

</form>
</div>   
</nav>
</body>
</html>