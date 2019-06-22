
<?php
	session_start();
    $employeeId=$_SESSION['employeeId'];
    

include 'connection.php';
if(isset($_POST['Submit']))
{


	 

	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$dob=$_POST['dob'];
	$doj=$_POST['doj'];
	$gender=$_POST['gender'];
	$bloodGroup=$_POST['bloodGroup'];
	$martialStatus=$_POST['martialStatus'];	
	$spouseOrHusbandName=$_POST['spouseOrHusbandName'];

	$languagesKnown=$_POST['languagesKnown'];
	$employeeContactNumber=$_POST['employeeContactNumber'];
	$employeeOfficialContactNumber=$_POST['employeeOfficialContactNumber'];
	$email=$_POST['email'];
	$panNumber=$_POST['panNumber'];

	$passportNumber=$_POST['passportNumber'];
	$EPFNumber=$_POST['EPFNumber'];
	$insuranceNumber=$_POST['insuranceNumber'];
	


	$aadharNumber=$_POST['aadharNumber'];
	$bankAccountNumber=$_POST['bankAccountNumber'];
	$bankIfscCode=$_POST['bankIfscCode'];
	$religion=$_POST['religion'];
	$caste=$_POST['caste'];
	$numberOfSiblings=$_POST['numberOfSiblings'];
	$residentialAddress=$_POST['residentialAddress'];
	$placeOfArrival=$_POST['placeOfArrival'];
	$travelMode=$_POST['travelMode'];

	$fatherName=$_POST['fatherName'];
	$motherName=$_POST['motherName'];
	$fatherOccupation=$_POST['fatherOccupation'];
	$motherOccupation=$_POST['motherOccupation'];
	$annualIncome=$_POST['annualIncome'];
	$permanantAddress=$_POST['permanantAddress'];
	$parentContactNumber=$_POST['parentContactNumber'];

	$tenthSchoolName=$_POST['tenthSchoolName'];
	$tenthMark=$_POST['tenthMark'];
	$tenthPercentage=$_POST['tenthPercentage'];
	$tenthBoardOfStudy=$_POST['tenthBoardOfStudy'];
	$twelthSchoolName=$_POST['twelthSchoolName'];
	$twelthMark=$_POST['twelthMark'];
	$twelthPercentage=$_POST['twelthPercentage'];
	$twelthBoardOfStudy=$_POST['twelthBoardOfStudy'];

	$linkedinId=$_POST['linkedinId'];
	$skypeId=$_POST['skypeId'];

	$emergencyPersonName=$_POST['emergencyPersonName'];
	$emergencyPersonNumber=$_POST['emergencyPersonNumber'];
	$emergencyPersonRelation=$_POST['emergencyPersonRelation'];

	$image=addslashes($_FILES['image']['tmp_name']);               
    $image=file_get_contents($image);
    $image=base64_encode($image);


	$query="INSERT INTO details(name,employeeId,designation,dob,doj,gender,bloodGroup,martialStatus,spouseOrHusbandName,languagesKnown,employeeContactNumber,email,employeeOfficialContactNumber,panNumber,passportNumber,EPFNumber,insuranceNumber,aadharNumber,bankAccountNumber,bankIfscCode,religion,caste,numberOfSiblings,residentialAddress,placeOfArrival,travelMode,fatherName,motherName,fatherOccupation,motherOccupation,annualIncome,permanantAddress,parentContactNumber,tenthSchoolName,tenthMark,tenthPercentage,tenthBoardOfStudy,twelthSchoolName,twelthMark,twelthPercentage,twelthBoardOfStudy,linkedinId,skypeId,image,emergencyPersonName,emergencyPersonNumber,emergencyPersonRelation)VALUES('$name','$employeeId','$designation','$dob','$doj','$gender','$bloodGroup','$martialStatus','$spouseOrHusbandName','$languagesKnown','$employeeContactNumber','$email','$employeeOfficialContactNumber','$panNumber','$passportNumber','$EPFNumber','$insuranceNumber','$aadharNumber','$bankAccountNumber','$bankIfscCode','$religion','$caste','$numberOfSiblings','$residentialAddress','$placeOfArrival','$travelMode','$fatherName','$motherName','$fatherOccupation','$motherOccupation','$annualIncome','$permanantAddress','$parentContactNumber','$tenthSchoolName','$tenthMark','$tenthPercentage','$tenthBoardOfStudy','$twelthSchoolName','$twelthMark','$twelthPercentage','$twelthBoardOfStudy','$linkedinId','$skypeId','$image','$emergencyPersonName','$emergencyPersonNumber','$emergencyPersonRelation')";
	$equ=mysqli_query($connection,$query);
            if($equ)
            {
                echo "<script>alert('Value Inserted')</script>";
            }
            else
            {
                echo "<script>alert('Value NotInserted')</script>";
            }


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
<link rel="icon" href="od icon.jpg" type="image/icon type">
	<title>ONEDATA</title>
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
<form action="" class="text-center" method="post"" enctype="multipart/form-data">
<h1 class="text-secondary">INSERT DETAILS</h1><br>
					<br><br><br>
					<div class="container">
						<div class="row"><div class="col-sm-3"></div>
							<div class="col-sm-6">


  					<div class="form-group">

					<input type="text" class="form-control" placeholder="Name" name="name" required="true"><br/> 
					<input type="text" class="form-control" name="designation" placeholder="Designation" required="true">		


				</div>
				<div class="row">

					<div class="col-md-6 mb-3">
						<label>Date of Birth</label>
					<input type="date"  class="form-control" name="dob" required="true"></div>
					
					<div class="col-md-6 mb-3">

					<label>Date of Joining</label>
					<input class="form-control" type="date" name="doj" required="true"></label></div>		
				</div>	
					


				<div class="row">

					<div class="col-md-6 mb-3">
					<label>Gender  </label>  <select name="gender" class="form-control" required="true">
	                    <option value="Male">Male</option>
	                    <option value="Female">Female</option>
	                </select>		</div>

					




					<div class="col-md-6 mb-3">
					<label>Blood Group  </label>  <select name="bloodGroup" class="form-control" required="true">
	                    <option value="A+ve">A+ve</option>
	                    <option value="A-ve">A-ve</option>
	                    <option value="B+ve">B+ve</option>
	                    <option value="B-ve">B-ve</option>
	                    <option value="AB+ve">AB+ve</option>
	                    <option value="AB-ve">AB-ve</option>
	                    <option value="O+ve">O+ve</option>
	                    <option value="O-ve">O-ve</option>
               		</select>		</div></div>


               		
					<label>Marital Status </label>
					 <select  name="martialStatus" class="form-control"  required="true">
						<option value="Male">Single</option>
						<option value="Female">Married</option> 
					</select> <BR>
					<input placeholder="Spouse or husband name" class="form-control" type="text" name="spouseOrHusbandName" required="true"><br/> 


					<input placeholder="Language Known " class="form-control"  type="text" name="languagesKnown" required="true"><br/>
					<div class="row">

					<div class="col-md-6 mb-3">
					
					<input placeholder="Personal Contact Number" class="form-control"  type="number" name="employeeContactNumber" required="true"></div>
					<div class="col-md-6 mb-3">
					<input placeholder="Email Id" class="form-control"  type="email" name="email" required="true"></div></div>

					<div class="row">

					<div class="col-md-6 mb-3">
					
					<input placeholder="Official Contact Number" class="form-control"  type="number" name="employeeOfficialContactNumber" required="true"></div>
					<div class="col-md-6 mb-3">
					<input placeholder="PAN Number" class="form-control" type="number" name="panNumber" required="true"><br/></div></div>
					<input placeholder="Passport Number" class="form-control" type="number" name="passportNumber"required="true"><br/>
					<input placeholder="EPF Number" class="form-control" type="number" name="EPFNumber"required="true"><br/>
					<input placeholder="Insurance Number" class="form-control" type="number" name="insuranceNumber"required="true"><br/>
					<input placeholder="Aadhar Number" class="form-control" type="number" name="aadharNumber"required="true"><br/>
					<div class="row">

					<div class="col-md-6 mb-3">
					<input placeholder="Bank Account Number" class="form-control" type="number" name="bankAccountNumber"required="true"></div>
					<div class="col-md-6 mb-3">
					
					<input placeholder="IFSC Code" class="form-control" type="text" name="bankIfscCode"required="true"></div></div>					
                	<div class="row">

					<div class="col-md-6 mb-3">
						<label>Religion</label><select  class="form-control" name="religion" required="true">
	                    <option value="Hindu"> Hindu</option>
	                    <option value="Muslim"> Muslim</option>
	                    <option value="Christian"> Christian</option>
	                </select></div>
	                <div class="col-md-6 mb-3">
	                <label>Caste</label>
					<select class="form-control" name="caste"  required=true>
	                    <option value="B.C">B.C</option>
	                    <option value="M.B.C">M.B.C</option>
	                    <option value="S.C">S.C</option>
	                    <option value="O.C">O.C</option>
	                    <option value="OTHERS">OTHERS</option>
                	</select></div></div>
                	<label>Number of Siblings</label>
					<select  class="form-control" name="numberOfSiblings"  required=true>
	                    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                    <option value="6">6</option>
	                    <option value="7">7</option>
	                    <option value="8">8</option>
	                    <option value="9">9</option>
	                    <option value="10">10</option>
            		</select><br/>

					<input class="form-control"  placeholder="Residential ddress" required="true" type="textarea" name="residentialAddress" ><br/>
					
					<div class="row">

					<div class="col-md-6 mb-3">
						

					
					<input class="form-control"  required="true" type="text" name="placeOfArrival" placeholder="Place Of Arrival"></div>		
					<div class="col-md-6 mb-3">
						
					<input class="form-control"   required="true" type="text" name="travelMode" placeholder="Travel Mode"></div></div>
					<div class="row"><div class="col-md-5 mb-2">
					<label for="pic">UPLOAD YOUR PHOTO:</label></div><div class="col-md-4 mb-1">
                	<input type="file"  name="image" class = "btn btn-outline-secondary"   required></div></div><br><br>



					
					<!-- PARENT DETAILS -->
					<h2 class="text-secondary">PARENT DETAILS</h2><br>

					<div class="row">

					<div class="col-md-6 mb-3">

					<input class="form-control"  placeholder="Father Name" required="true"  type="text" name="fatherName"></div>

					<div class="col-md-6 mb-3">
						<input class="form-control"  placeholder="Mother Name" required="true" type="text" name="motherName"></div></div>




					<div class="row">

					<div class="col-md-6 mb-3">

					<input class="form-control"  placeholder="Father Occupation" required="true" type="text" name="fatherOccupation"></div>

					<div class="col-md-6 mb-3">
					<input class="form-control"  placeholder="Mother Occupation" required="true" type="text" name="motherOccupation"></div></div>
					<input class="form-control"  placeholder="Annual Income" required="true" type="number" name="annualIncome"><br/>
					<input class="form-control"  placeholder="Permanant Address" required="true" type="text" name="permanantAddress"><br/>
					<input class="form-control"  placeholder="Parent Contact Number" required="true" type="number" name="parentContactNumber"><br/><br>
					<!-- ACADEMIC DETAILS -->
					<h2 class="text-secondary">ACADEMIC DETAILS</h2><br>

					<div class="row">

					<div class="col-md-6 mb-3">
					<input class="form-control"  placeholder="10th School Name" required="true" type="text" name="tenthSchoolName"></div>
			
					<div class="col-md-6 mb-3"><input class="form-control"  placeholder="10th Mark" required="true" type="number" name="tenthMark"></div></div>
					<input class="form-control"  placeholder="10th Percentage" required="true" type="number" name="tenthPercentage"><br/>
					<input class="form-control"  placeholder="10th Board Of Study" required="true" type="text" name="tenthBoardOfStudy"><br/>
					<div class="row">

					<div class="col-md-6 mb-3">
					<input class="form-control"  placeholder="12th School Name" required="true" type="text" name="twelthSchoolName"></div>
					<div class="col-md-6 mb-3">
					<input class="form-control"  placeholder="12th Mark" required="true" type="number" name="twelthMark"></div></div>
					<input class="form-control"  placeholder="12th Percentage" required="true" type="number" name="twelthPercentage"><br/>
					<input class="form-control"  placeholder="12th Board Of Study" required="true" type="text" name="twelthBoardOfStudy"><br/><br>
					<!-- SOCIAL MEDIA LINK -->
					<h2 class="text-secondary">SOCIAL MEDIA DETAILS</h2><br>
					<div class="row">

					<div class="col-md-6 mb-3">
					<input class="form-control"  placeholder="Linkedin Id" required="true" type="text" name="linkedinId"><br/></div>
					<div class="col-md-6 mb-3">
					<input class="form-control"  placeholder="Skype Id" required="true" type="text" name="skypeId"><br/>
					</div></div><br><br>


					<h2 class="text-secondary">EMERGENCY CONTACT DETAILS</h2><br>
					<input class="form-control"  placeholder="PERSON NAME" required="true" type="text" name="emergencyPersonName"> <br/>
					<input class="form-control"  placeholder="CONTACT NUMBER" required="true" type="number" name="emergencyPersonNumber"><br/>
					<input class="form-control"  placeholder="RELATION" required="true" type="text" name="emergencyPersonRelation"><br/>


					
					
					<div class="row"><div class="col-md-3"></div><div class="col-md-5"><br><br>
					<center><input type="submit" name="Submit"value="SUBMIT FORM" class = "btn " style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9); Width:210px;";  ></div></center></div>
				</div>
				</form></div>
		</body>

</html>