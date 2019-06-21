<?php
if(isset($_POST['insert']))
{
    header("location: insertDetails.php"); 
}
if(isset($_POST['degree']))
{
    header("location: degree.php");   
}
if(isset($_POST['experience']))
{
    header("location: experience.php");  
}
if(isset($_POST['technology']))
{
    header("location: technology.php");  
}
if(isset($_POST['reference']))
{
    header("location: reference.php");    
}
if(isset($_POST['softcopy']))
{
    header("location: softcopy.php");    
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

<style>
footer { 
    
}
 
 body {
  background: url('EIS_Employee-ID-BG.jpg');
  background-repeat:no-repeat;
  background-size:cover;
 } 
 .center {
  margin: auto;
  width:250px;
  padding: 10px;
}
.align-center{
text-align: center;

}
</style>
<title>ONEDATA  </title>
</head>

<body  >


<nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="insertId.php"    class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul> 
       <div class="col-md-5"></div>
        <div class="col-md-3">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav> 
<div class="container">
<form method="post" class="pt-5">
<br><br><br><br><br> 
                    <div class="row">
                    <div class="col-4"></div>
                    
                    <div class="col-4">
                        <input type="submit"  class="btn btn-md btn-outline-secondary btn-block text-center" value="INSERT DETAILS"  name="insert">
                        <input type="submit" class="btn btn-md btn-outline-secondary btn-block text-center" value="INSERT DEGREE DETAILS"name="degree">
                        <input type="submit" class="btn btn-md btn-outline-secondary btn-block text-center" value="INSERT EXPERIENCE DETAILS" name="experience">                        
                        <input type="submit" class="btn btn-md btn-outline-secondary btn-block text-center" value="INSERT TECHNOLOGY & TOOLS " name="technology">
                        <input type="submit" class="btn btn-md btn-outline-secondary btn-block text-center" value="INSERT REFERENCE DETAILS" name="reference">
                         <input type="submit" class="btn btn-md btn-outline-secondary btn-block text-center" value="INSERT SOFTCOPY DETAILS"  name="softcopy">
                    </div></div><br><br><br><br><br>
 

</nav>

<footer style="top:180px;">
<p class="mt-2 mb-3 text-center" >&copy; ONEDATA SOFTWARE SOLUTION PRIVATE LIMITED</p>
</footer>
</form></div>
</body>
</html>