<?php

if(isset($_POST['viewDetails']))
{

  header("location:viewDetails.php");

}
if(isset($_POST['viewSoftcopy']))
{

  header("location:viewSoftcopy.php");

}


?>
<!doctype html>
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
} 
 body {
  background: url('EIS_Admin-Bg-06.jpg');
  background-repeat:no-repeat;

  background-size:cover;
 } 
 .center {
  margin: auto;
  width:250px;
  padding: 10px;
}
</style>
<title>ONEDATA </title>
</head>

<body>

<div class="container">

<nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="viewId.php"    class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul> 
       <div class="col-md-5"></div>
        <div class="col-md-3">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav> 



<nav>
<form method="post" style="padding-top:150px" action="">
  <div class="center">
     
         <br><br><br>
        <input class="btn btn-secondary btn-block" type="submit" value="VIEW DETAILS" style="height:35px;" name="viewDetails" ><br>
        <input class="btn btn-secondary btn-block" type="submit" value="VIEW SOFTCOPY"style="height:35px;" name="viewSoftcopy" ><br> 
</div>     
</form>
</nav> 

</div>   
</body>
</html>
