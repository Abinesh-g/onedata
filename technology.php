 <?php  
 
   session_start();
  $employeeId=$_SESSION['employeeId'];

 if(isset($_POST['submit']))
 {


 $connect = mysqli_connect("localhost", "root", "");
 if(mysqli_select_db($connect,"onedata"))
 {
 	//echo "db connected";
 }
 else
 {
 	echo "db not connected";
 }
 
 $number = count($_POST["technology"]);

 $technology=$_POST['technology'];
 $rate=$_POST['rate'];
 $certification=$_POST['certification'];

 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["technology"][$i] != ''))  
           {  
                $sql = "INSERT INTO technology(employeeId,technology,rate,certification) VALUES('$employeeId','$technology[$i]','$rate[$i]','$certification[$i]')";  
                mysqli_query($connect, $sql);  
           }  
      }  
     echo "<script>alert('TECHNOLOGY Details Added Successfully')</script>";  
 }  
 else  
 {  
      echo "<script>alert('TECHNOLOGY Details Added Failed ')</script>";  
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
		<div class="container">
			<br /><br /><br /><br /><br /><br />
			<h2 align="center">TECHNOLOGY & TOOLS INFORMATION</a></h2>
			<div class="form-group">
				
				<form name="add_name" id="add_name" action="" class="text-center" method="post" style="padding-top:0%" enctype="multipart/form-data">

                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr><td><input type="text" name="technology[]" placeholder="Enter the technology you Know" class="form-control name_list" / required></td> <tr><td> Rate Yourself(out of 10):</td></tr>
                                    <tr><td><input type="number" name="rate[]" class="form-control name_list" / required></td>  
                                    <tr><td><input type="date" name="certification[]" placeholder="Enter the certification & course you have completed" class="form-control name_list" / required></td>  
                                    <tr><td><button type="button" name="add" id="add" class="btn btn-outline-SECONDARY">ADD TECHNOLOGY</button></td>  
                                    </tr>  
                               </table>  
                               <input type="submit" name="submit" id="submit" class="btn btn-outline-primary" value="SUBMIT" />  
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
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="technology[]" placeholder="Enter the technology you Know" class="form-control name_list" / ></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
           
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="rate[]" placeholder="Rate yourself out of 10" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>'); 
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="date" name="certification[]" placeholder="Enter the certification you have completed" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
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
   