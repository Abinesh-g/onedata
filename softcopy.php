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
 <link rel="icon" href="od icon.jpg" type="image/icon type">
<title>ONEDATA  </title>
</head>
<nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="insertDetailsMenu.php" class="text-white bg-dark col-sm-offset-1 "><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul>
        <div class="col-sm-12">
          <center>
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;"> </center>
         </div>    
</nav> 
<body class="" background="bg1.png">
  <div class="container">
<form action="" class="text-center" method="post" style="padding-top:0%" enctype="multipart/form-data">
<br><br><br><br><br><br><br><br> 
 
 <div class="row"> 
 <div class="col-sm-offset-5 col-xs-offset-3">  
  <center>    
 <h3 style="width: 200px">SELECT TYPE:</h3><br>
 <select  name="description" style="width: 250px" required>
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
	 <br><br>
				<h3 style="width: 250px" >UPLOAD PHOTO:</h3>
				 
	 <br><center>
				<input type="file" name="image" class=" btn btn-outline-secondary" style="width: 200px"placeholder="Enter Details" required><br></center>
  <br><br>
				<input type="submit" class="btn btn-lg   btn-block" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9); width: 250px"; name="submit"  value="submit">
	</div></div>	 <br><br><br><br>


		<footer style="top:180px;">
			<p class="mt-2 mb-3 text-center" >&copy; Onedata Software solution</p>
		</footer>
</form>
</div>
</body>
</html>