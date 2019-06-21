<?php

if(isset($_POST['Submit']))
{


        $employeeId=$_POST['employeeId'];  
        $flag="0";
        include 'connection.php';
        $qry="SELECT * FROM employeeid";
        $result=mysqli_query($connection,$qry); 
        while($row = mysqli_fetch_array($result))
        { 
          if($row[0]==$employeeId)
          {
                 $flag="1";    
          }
          
        } 
        if($flag=="1")
        {
           session_start();
           $_SESSION['employeeId']=$employeeId;
           header("location:insertDetailsMenu.php");
        }
        if($employeeId=="ODA")
           header("location:main.php");
        else
            echo "<script>alert('Invalid EmployeeID')</script>";



 

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
        <div class="col-sm-offset-4 col-xs-offset-3">
        <img href="main.php" src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav> 
<body class="" background="EIS_Employee-ID-BG.jpg">
<div class="container">
<form method="post" action="">
  <center>
<div class="row" style="margin-top: 150px">

      
        <div class="col-sm-offset-5 col-xs-offset-4">
        <h3 style="width: 150px"  >EMPLOYEE ID</h3><br><br>
        
         
        <input type="text" name="employeeId" class="form-control " style="width: 150px"  placeholder="Enter Employee ID" required> 
         
       <br> 
         <input class="btn btn-default btn-primary btn-block" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9); width: 150px; "; type="submit"  value="Submit"name="Submit" ><br><br> 
	   </div>
</div>
 </center>
</form>
</div>
</body>
</html>
