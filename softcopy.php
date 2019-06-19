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
</head><nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="insertDetailsMenu.php"    class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul> 
       <div class="col-md-5"></div>
        <div class="col-md-3">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav> 
<body class="" background="bg1.png">
<form action="" class="text-center" method="post" style="padding-top:0%" enctype="multipart/form-data">
<br><br><br><br><br><br><br><br> 
 <center>       
 <h3 >SELECT TYPE:</h3>
 <select  name="description" required>
					<option value="AADHAR-CARD">AADHAR CARD</option>
					<option value="PASSBOOK">PASSBOOK</option>
					<option value="PASSPORT">PASSPORT</option>
					<option value="PAN-CARD">PAN</option>
					<option value="SSLC-MARKSHEET">SSLC MARKSHEET</option>
					<option value="HSC-MARKSHEET">HSC MARKSHEET</option>
					<option value="UG1-SEMESTER-I">UG SEMESTER-I</option>
					<option value="UG2-SEMESTER-II">UG SEMESTER-II</option>
					<option value="UG3-SEMESTER-III">UG SEMESTER-III</option>
					<option value="UG4-SEMESTER-IV">UG SEMESTER-IV</option>
					<option value="UG5-SEMESTER-V">UG SEMESTER-V</option>
					<option value="UG6-SEMESTER-VI">UG SEMESTER-VI</option>
					<option value="UG7-SEMESTER-VII">UG SEMESTER-VII</option>
					<option value="UG8-SEMESTER-VIII">UG SEMESTER-VIII</option>
					<option value="UG9-SEMESTER-IX">UG SEMESTER-IX</option>
					<option value="UG10-SEMESTER-X">UG SEMESTER-X</option>
					<option value="PG1-SEMESTER-I">PG SEMESTER-I</option>
					<option value="PG2-SEMESTER-II">PG SEMESTER-II</option>
					<option value="PG3-SEMESTER-III">PG SEMESTER-III</option>
					<option value="PG4-SEMESTER-IV">PG SEMESTER-VI</option>
					<option value="PG5-SEMESTER-V">PG SEMESTER-V</option>
					<option value="PG6-SEMESTER-VI">PG SEMESTER-VI</option>
          <option value="CERTIFICATION-I">CERTIFICATION-I</option>
          <option value="CERTIFICATION-II">CERTIFICATION-II</option>
          <option value="CERTIFICATION-III">CERTIFICATION-III</option>
          <option value="CERTIFICATION-IV">CERTIFICATION-IV</option>
          <option value="CERTIFICATION-V">CERTIFICATION-V</option>
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
				<input type="submit" class="btn btn-lg btn btn-outline-primary btn-block" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9);  "; name="submit"  value="submit">
				</div>
		</div>
</form>
</body>

		<footer style="top:180px;">
			<p class="mt-2 mb-3 text-center" >&copy; Onedata Software solution</p>
		</footer>

</html>