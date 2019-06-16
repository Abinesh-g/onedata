<?php
session_start();
$employeeId=$_SESSION["employeeId"] ;

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="signin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>ONEDATA</title>
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
  <form method="post" class="form-signin text-center justify-content-center" style="padding-top:0%;min-width:500px;" enctype="multipart/form-data">
  

    <div class="row justify-content-center">
            

            <?php
            	$employeeId="onedata01";
            	include 'connection.php';
				$qry="SELECT * FROM softcopy WHERE employeeId='$employeeId'";
				$result=mysqli_query($connection,$qry);
				
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{
					
					echo('<h1 class="text-primary">'.$row[1].'</h1><br>');
                    echo '<img height="500" width="700" src="data:image;base64,'.$row[2].' "> ';
                    echo '<br/>';
					
				}

            ?>