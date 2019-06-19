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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="signin.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>ONEDATA</title>
<style>
 .bodyClass {
  background: url('EIS_Login-BG.jpg');
  background-repeat:no-repeat;

  background-size:cover;
 }
</style>
</head>


<body class="container bodyClass"  >
 <br> 
  </div>
    <form    action=""  method="post">
      <div class="container"><div class="col-md-2"></div>
        <div class="col-md-4"> <center> 
       <img src="OD LOGO-1.png" alt="Logo" style="width:180px;"><br><br>   
      <h1 class="h2 mb-3 font-weight-normal" style="padding-bottom:0px">LOGIN</h1><br>
      <label for="uname"  class="sr-only">Username</label>
      <input type="text" id="uname" class="form-control" style="height:35px;" placeholder="Username" name="name" required autofocus><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" style="height:35px;" name="psw" placeholder="Password" required><br><br>
	  <input class="btn btn-lg btn-primary btn-block" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9)"; type="submit"  value="Sign In" ><br><br></center>
	  </div></div>
    </form>
  </body>
</html>
