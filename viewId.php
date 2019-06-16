<?php

if(isset($_POST['submit']))
{
  session_start();

  $employeeId=$_POST['employeeId'];
  $_SESSION['employeeId']=$employeeId;

  header("location:viewSelect.php");

}


?>
<html>
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
    position: relative;
    height: 0px;
    bottom: 110px;
    left: 0px;
    right: 0px;
    margin-bottom: 0px;
    text-size:1px;
.button {
  position: relative;
  background-color: #4CAF50;
  border: none;
  font-size: 28px;
  color: #FFFFFF;
  padding: 20px;
  width: 200px;
  text-align: center;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
}

.button:after {
  content: "";
  background: #90EE90;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px!important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}
    
}
.align-center{
text-align: center;

}
</style>
<title>ONEDATA  </title>
</head>
<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark">
            
    <ul class="nav-item" style="padding-left:30px;">
        <img src="onedata.png" alt="Logo" style="width:180px;">
    </ul>
    <center>
    <ul class="nav-item justify-content-center" >
        <div class="col-md-12">
        <a class="navbar-brand justify-content-center display-1 mb-1 font-weight-normal align-center" style="font-size:25px;" href="#">ONEDATA SOFTWARE SOLUTION PRIVATE LIMITED</a>
        </div>
    </ul></center>
</nav>

<form method="post" action="">
<div class="row" style="margin-top: 250px">
		    <div class="col-md-4"></div>
				<div class="col-md-4">
				<h3 style="padding-top:0px">EMPLOYEE ID:</h3>
				</div>
		</div>
		<br><br>
		<div class="row">
		     <div class="col-md-4"></div>
				<div class="col-md-4">
				<input type="text" name="employeeId" class="form-control" placeholder="Enter Employee ID" required>

				</div>
		</div>

       <br><br>
		<div class="row">
		     <div class="col-md-4"></div>
				<div class="col-md-4">
				<input type="submit" class="btn btn-lg btn btn-outline-primary btn-block" name="submit" value="SUBMIT">
				</div>
		</div>


</div>	
</form>
</body>
		<footer style="top:180px; margin-top: 135px">
			<p class="mt-2 mb-3 text-center" >&copy; ONEDATA SOFTWARE SOLUTION PRIVATE LIMITED</p>
		</footer>



</html>
