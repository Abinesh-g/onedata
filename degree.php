 <?php  


  session_start();

  $employeeId=$_SESSION['employeeId'];


 if(isset($_POST['submit']))
 {

include 'connection.php';

 
 
 $number = count($_POST["degree"]);

 $degree=$_POST['degree'];
 $dept=$_POST['department'];
 $cgpa=$_POST['cgpa'];
 $institution=$_POST['institution'];
 $university=$_POST['university'];
 $year=$_POST['year'];
 $project=$_POST['project'];
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["degree"][$i] != ''))  
           {  
                $sql = "INSERT INTO degree(employeeId,degree,department,cgpa,institutionName,universityName,yearOfPassing,projectDetails) VALUES('$employeeId','$degree[$i]','$dept[$i]','$cgpa[$i]','$institution[$i]','$university[$i]','$year[$i]','$project[$i]')";  
                mysqli_query($connection, $sql);  
           }  
      }  
      echo "<script>alert('Degree Details Added Successfully')</script>";  
 }  
 else  
 {  
      echo "<script>alert('Degree Details Added Failed ')</script>";  
 } 
 } 
 ?> 



  <html lang="en"> 
      <head>  
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
	<body class="" background="bg1.png">
 <nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="insertDetailsMenu.php"    class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul> 
       <div class="col-md-5"></div>
        <div class="col-md-3">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav> 
		<div class="container">
			<br />
			<br /><br />
      <br /><br />
      <br />
			<h2 align="center">DEGREE INFORMATION</a></h2>
			<div class="form-group">
				
				<form name="add_name" id="add_name" action="" class="text-center" method="post" style="padding-top:0%" enctype="multipart/form-data">

                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr><td><input type="text" name="degree[]" placeholder="Enter your degree" class="form-control name_list" / required></td>  
                                    <tr><td><input type="text" name="department[]" placeholder="Enter your department" class="form-control name_list" / required></td>  
                                    <tr><td><input type="text" name="cgpa[]" placeholder="Enter your CGPA" class="form-control name_list" / required></td>  
                                    <tr><td><input type="text" name="institution[]" placeholder="Enter Institution Name" class="form-control name_list" /required></td> 
                                    <tr><td><input type="text" name="university[]" placeholder="Enter University Name" class="form-control name_list" /required></td>  
                                    <tr><td><input type="text" name="year[]" placeholder="Enter year of passing " class="form-control name_list" /required></td> 
                                    <tr><td><input type="text" name="project[]" placeholder="Enter your project details" class="form-control name_list" /required></td>  
                                    <tr><td><button type="button" name="add" id="add"  class="btn btn-outline-secondary">ADD DEGREE</button></td>  
                                    </tr>  
                               </table>  
                               <input type="submit" name="submit" id="submit" value="SUBMIT" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9); Width:210px;"; class = "btn btn-outline- value="Submit" />  
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
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="degree[]" placeholder="Enter your degree" class="form-control name_list" / ></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
           
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="dept[]" placeholder="Enter your department" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="cgpa[]" placeholder="Enter your cgpa/percentage" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
           
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="institution[]" placeholder="Enter institution name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="university[]" placeholder="Enter university name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
           
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text"  name="year[]" placeholder="Enter year of passing" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="project[]" placeholder="Enter project details" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');

      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
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
   