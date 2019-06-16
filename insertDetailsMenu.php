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
    
}
.align-center{
text-align: center;

}
</style>
<title>ONEDATA  </title>
</head>

<body class="" background="bg1.png">

<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark">
            
    <ul class="nav-item" style="padding-left:30px;">
        <img src="onedata.png" alt="Logo" style="width:180px;">
    </ul>
    <center>
    <ul class="nav-item justify-content-center" >
        <div class="col-md-12">
        <a class="navbar-brand justify-content-center display-1 mb-1 font-weight-normal align-center" style="font-size:25px;" href="#">ONEDATA SOFTWARE SOLUTION PRIVATE LIMITED</a>
        </div>
    </ul></center>
</nav>

<nav>
<form method="post" style="padding-top:93px">
<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="bg-primary" >
                <ul class="list-unstyled components">
                    <li class="bg-primary">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="INSERT DETAILS"  name="insert">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="INSERT DEGREE DETAILS"name="degree">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="INSERT EXPERIENCE DETAILS" name="experience">
                        
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="INSERT TECHNOLOGY & TOOLS " name="technology">
                        <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="INSERT REFERENCE DETAILS" name="reference">
                         <input type="submit" class="btn btn-md btn-primary btn-block text-left" value="INSERT SOFTCOPY DETAILS"  name="softcopy">
                    </li>
                </ul>
                </div>
            </nav>

</div>
</form>
</nav>
</body>
<footer style="top:180px;">
<p class="mt-2 mb-3 text-center" >&copy; ONEDATA SOFTWARE SOLUTION PRIVATE LIMITED</p>
</footer>
</html>