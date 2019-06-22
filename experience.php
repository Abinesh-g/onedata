 <?php  
 
  session_start();
  $employeeId=$_SESSION['employeeId'];

 if(isset($_POST['submit']))
 {

 include 'connection.php';
  
 
 $number = count($_POST["companyName"]);

 $companyName=$_POST['companyName'];
 $designation=$_POST['designation'];
 $totalExperienceYears=$_POST['totalExperienceYears'];
 $dateOfJoined=$_POST['dateOfJoined'];
 $dateOfRelived=$_POST['dateOfRelived'];

 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["companyName"][$i] != ''))  
           {  
                $sql = "INSERT INTO experience(employeeId,companyName,designation,totalExperienceYears,dateOfJoined,dateOfRelived) VALUES('$employeeId','$companyName[$i]','$designation[$i]','$totalExperienceYears[$i],'$dateOfJoined[$i]','$dateOfRelived[$i]')";  
                mysqli_query($connection, $sql);  
           }  
      }  
      echo "<script>alert('EXPERIENCE Details Added Successfully')</script>";  
 }  
 else  
 {  
      echo "<script>alert('EXPERIENCE Details Added Failed ')</script>";  
 } 
 } 
 ?> 



  <html lang="en"> 
      <head>  <link rel="icon" href="od icon.jpg" type="image/icon type">
           <title>ONEDATA</title>  
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



	</head>
	<body class="" background="bg1.png"><nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="insertDetailsMenu.php" class="text-white bg-dark col-sm-offset-1 "><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul>
        <div class="col-sm-12">
          <center>
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;"> </center>
         </div>    
</nav> 
		<div class="container">
			<br /><br /> 
			<h2 align="center">EXPERIENCE INFORMATION</a></h2>
			<div class="form-group">
				
				<form name="add_name" id="add_name" action="" class="text-center" method="post" style="padding-top:0%" enctype="multipart/form-data">

                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr><td><input type="text" name="companyName[]" placeholder="Company Name" class="form-control name_list" / required></td>  
                                    <tr><td><input type="text" name="designation[]" placeholder="Your Designation " class="form-control name_list" / required></td>  
                                      <tr><td><input type="text" name="totalExperienceYears[]" placeholder="Number of years Experiences " class="form-control name_list" / required></td>
                                      <tr><td>  <label for="cgpa">Date of Joined</label></td>
                                    <tr><td><input type="date" name="dateOfJoined[]"  class="form-control name_list" / required></td>  
                                      <tr><td>  <label for="cgpa">Date of releaved</label></td>
                                    <tr><td><input type="date" name="dateOfRelived[]"  class="form-control name_list" /required></td> 
                                    <tr><td><button type="button" name="add" id="add" class="btn btn-outline-SECONDARY">ADD EXPERIENCE</button></td>  
                                    </tr>  
                               </table>  
                               <input type="submit" name="submit" id="submit" class="btn " style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9); Width:210px;"; value="SUBMIT" />  
                          </div>  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script type="text/javascript" >  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++; 
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="companyName[]" placeholder="Company Name" class="form-control name_list" / ></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
           
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="designation[]" placeholder="Your Designation " class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="no_Of_Year[]" placeholder="Number of years Experiences " class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
           $('#dynamic_field').append('<tr><td>  <label id="row'+i+'" for="cgpa">Date of Joined</label></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td><tr id="row'+i+'"><td><input type="date" name="fromDate[]"  class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
           
           $('#dynamic_field').append('<tr><td>  <label id="row'+i+'" for="cgpa">Date of releaved</label></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td><tr id="row'+i+'"><td><input type="date" name="toDate[]" p class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');

      });  
      $(document).on('click', '.btn_remove', function(){  
          
           $('#row'+i+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
   