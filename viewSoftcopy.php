<?php
session_start();
$employeeId=$_SESSION["employeeId"] ;

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

<title>ONEDATA</title>
</head>

<body class="" >
<div class="container">

<nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="viewSelect.php"    class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul> 
       <div class="col-md-5"></div>
        <div class="col-md-3">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav>
  <form method="post" class="form-signin text-center justify-content-center" style="padding-top:0%;min-width:500px;" enctype="multipart/form-data">
  

    <div class="row justify-content-center">
            

            <?php
            	
            	include 'connection.php';
				$qry="SELECT * FROM softcopy WHERE employeeId='$employeeId'";
				$result=mysqli_query($connection,$qry);
				
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{
					
					echo('<h2 class="text-secondary">'.$row[1].'</h2><br>');
                    echo '<img height="500" width="700" src="data:image;base64,'.$row[2].' "> ';
                    echo '<br/><br/>';
					
				}

            ?>

        </div>
    </form></div></body></html>