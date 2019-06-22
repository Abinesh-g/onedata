<?php

if(isset($_POST['Submit']))
{


        $employeeId=$_POST['employeeId'];

        include 'connection.php';
        $qry="INSERT INTO employeeid(employeeId) VALUES('$employeeId') ";
        $result=mysqli_query($connection,$qry);
        
        if($result)       
          echo "<script>alert('EmployeeID Inserted Successfully')</script>";
        else
          echo "<script>alert('EmployeeID not inserted ')</script>";



 

}


?>
<html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <meta charset="utf-8">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="signin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

body {
  background: url('EIS_Employee-ID-BG.jpg');
  background-repeat:no-repeat;

  background-size:cover;
 } 

.align-center{
text-align: center;

}
</style><link rel="icon" href="od icon.jpg" type="image/icon type">
<title>ONEDATA  </title>
</head>
<nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="main.php" class="text-white bg-dark col-sm-offset-1 "><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul>
        <div class="col-sm-12">
          <center>
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;"> </center>
         </div>    
</nav> 
<body class="" background="EIS_Employee-ID-BG.jpg">

<div class="container">
<form method="post" action="">
<div class="row" style="margin-top: 150px">
      <div class="col-sm-offset-5 col-xs-offset-4">   
        <center><h3 style="   width:250px;" >EMPLOYEE ID</h3><br><br></center>
        
        <input type="text" name="employeeId" class="form-control " style="width:250px;" placeholder="Enter Employee ID" required><br>

         
         <input class="btn btn-default btn-primary btn-block" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9); Width:250px;"; type="submit"  value="Submit"name="Submit" ><br><br></center> 
        </div> 
 
</div>
</form>
</div>
</body>


</html>
