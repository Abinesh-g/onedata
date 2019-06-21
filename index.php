<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
$name=$_POST['name'];
$psw=$_POST['psw'];
if($name=="ONEDATA" AND $psw=="ONEDATA")
{

header("location:main.php");
}
else
{
echo "<script>alert('Invalid Username or Password')</script>"; 
}
}
?>
<!doctype html>
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
<style>


 body {
  background: url('EIS_Login-BG.jpg');
  overflow:auto;  
  background-size:cover;
 }
 .font{
  font-family: "Lucida Sans", sans-serif;
}


 
</style>
</head>

<body >
 <br> 
  
  <div class="container">
    <form action=""  method="post" >
       <div class="row"> 
        <div class="offset-1 col-sm-offset-4 col-xs-offset-4"> 
          <center> 
           <img src="OD LOGO-1.png" alt="Logo" style="width:180px;"><br><br>   
          <h1 class=" font-weight-normal"  >LOGIN</h1><br>
          <label for="uname"  class="sr-only">Username</label>
          <input type="text" id="uname" class="form-control" style="height:35px;" placeholder="Username" name="name" required autofocus><br>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" style="height:35px;" name="psw" placeholder="Password" required><br><br>
    	     <input class="btn btn-lg btn-primary btn-block" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9)"; type="submit"  value="Sign In" ><br><br>
         </center>
	  </div>
  </div>
    </form> 
  </div>
  </body>
</html>
