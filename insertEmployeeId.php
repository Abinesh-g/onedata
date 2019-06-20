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
</style>
<title>ONEDATA  </title>
</head>

<nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="main.php"    class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul> 
       <div class="col-md-5"></div>
        <div class="col-md-3">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav> 
<body class="" background="EIS_Employee-ID-BG.jpg">


<form method="post" action="">
<div class="container">
<div class="row" style="margin-top: 200px">
        <div class="col-md-5"></div>
        <div class="col-md-2">
        <h3 style="padding-left:25px;  width:210px;" >EMPLOYEE ID</h3>
        </div>
    </div></div>
    <br><br>
    <div class="container">
    <div class="row">
         <div class="col-md-5"></div>
        <div class="col-md-2">
        <input type="text" name="employeeId" class="form-control " style="width:210px;" placeholder="Enter Employee ID" required>

        </div>
    </div>

       <br>
        <div class="row">
         <div class="col-md-5"></div>
         <div class="col-md-2">
         <input class="btn btn-default btn-primary btn-block" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9); Width:210px;"; type="submit"  value="Submit"name="Submit" ><br><br></center>
    
            </div>
        </div>
    </div>
</div>

</div>
    <footer style="top:180px; margin-top: 135px">
      <p class="mt-2 mb-3 text-center" >&copy; Onedata Software Solution Pvt Ltd</p>
    </footer>

</form>
</div>
</body>


</html>
