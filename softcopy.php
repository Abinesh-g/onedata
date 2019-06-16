<?php

if(isset($_POST['submit']))
{

    
include 'connection.php';
                    $employeeId="onedata01";
                    $description=$_POST['description'];
                    $image= addslashes($_FILES['image']['tmp_name']);
                    $image=file_get_contents($image);
                    $image=base64_encode($image);
              
        $qname="INSERT INTO softcopy(employeeId,description,image) VALUES('$employeeId','$description','$image')";
        $equ=mysqli_query($connection,$qname);
    if($equ)
     {
      
      echo "<script>alert('Details Added Successfully')</script>";  
     }  
     else  
     {  
          echo "<script>alert('Details Added Failed ')</script>";  
     } 
}



?>
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
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark">
           
    <ul class="nav-item" style="padding-left:20px;">
        <img src="onedata.png" alt="Logo" style="width:180px;">
    </ul>
    <center>
    <ul class="nav-item justify-content-center" >
        <div class="col-md-12">
        <a class="navbar-brand justify-content-center display-1 mb-1 font-weight-normal align-center" style="font-size:25px;" href="#">ONEDATA SOFTWARE SOLUTION PRIVATE LIMITED</a>
        </div>
    </ul></center>
</nav>
<body class="" background="bg1.png">
<form action="" class="text-center" method="post" style="padding-top:0%" enctype="multipart/form-data">
<br><br><br><br><br><br><br><br> 
 <center>       
 <h3 >SELECT TYPE:</h3>
 <select  name="description" required>
					<option value="AADHAR">AADHAR CARD</option>
					<option value="PASSBOOK">PASSBOOK</option>
					<option value="PASSPORT">PASSPORT</option>
					<option value="PAN">PAN</option>
					<option value="SSLC">SSLC MARKSHEET</option>
					<option value="HSC">HSC MARKSHEET</option>
					<option value="UG1">UG SEMESTER-I</option>
					<option value="UG2">UG SEMESTER-II</option>
					<option value="UG3">UG SEMESTER-III</option>
					<option value="UG4">UG SEMESTER-IV</option>
					<option value="UG5">UG SEMESTER-V</option>
					<option value="UG6">UG SEMESTER-VI</option>
					<option value="UG7">UG SEMESTER-VII</option>
					<option value="UG8">UG SEMESTER-VIII</option>
					<option value="UG9">UG SEMESTER-IX</option>
					<option value="UG10">UG SEMESTER-X</option>
					<option value="PG1">PG SEMESTER-I</option>
					<option value="PG2">PG SEMESTER-II</option>
					<option value="PG3">PG SEMESTER-III</option>
					<option value="PG4">PG SEMESTER-VI</option>
					<option value="PG5">PG SEMESTER-V</option>
					<option value="PG6">PG SEMESTER-VI</option>
					<option value="CONSOLIDATED">CONSOLIDATED CERTIFICATE</option>
					</select>
</center>  				 	


<br><br><br>
		<div class="row">
		    <div class="col-md-4"></div>
				<div class="col-md-4">
				<h3 style="padding-top:0px">UPLOAD PHOTO:</h3>
				</div>
		</div>
		<div class="row">
		     <div class="col-md-4"></div>
				<div class="col-md-4">
				<input type="file" name="image" class="form-control btn-outline-secondary" placeholder="Enter Details" required>

				</div>
		</div>
<br><br>
		<div class="row">
		     <div class="col-md-4"></div>
				<div class="col-md-4">
				<input type="submit" class="btn btn-lg btn btn-outline-primary btn-block" name="submit" value="Insert">
				</div>
		</div>
</form>
</body>

		<footer style="top:180px;">
			<p class="mt-2 mb-3 text-center" >&copy; Onedata Software solution</p>
		</footer>

</html>