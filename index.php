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
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="signin.css" rel="stylesheet">  

<title>ONEDATA</title>
<style>
 body {
  background: url('EIS_Login-BG.jpg');
  width:100%;
  background-size:cover;
 }
 .font{
  font-family: "Lucida Sans", sans-serif;
}


 
</style>
</head>

<body class="col-xs-4 col-sm-4 col-md-10 col-lg-5 "  >
 <br> 
  </div>
    <form action=""  method="post">
      <div class="container-fluid"><div class="col-md-6 col-sm-0"></div>
        <div class="col-md-12 col-sm-0 col-xs-20 "> <center> 
       <img src="OD LOGO-1.png" alt="Logo" style="width:180px;"><br><br>   
      <h1 class="h2 mb-3 font-weight-normal" style="padding-bottom:0px">LOGIN</h1><br>
      <label for="uname"  class="sr-only">Username</label>
      <input type="text" id="uname" class="form-control" style="height:35px;" placeholder="Username" name="name" required autofocus><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" style="height:35px;" name="psw" placeholder="Password" required><br><br>
	  <input class="btn btn-lg btn-primary btn-block" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9)"; type="submit"  value="Sign In" ><br><br></center>
	  </div></div>
    </form>
  <!--   <div class="row">
      <div class="col-md-6 col-lg-4 col-sm-6 col-xs-6">
        <form>
          <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div> -->
  </body>
</html>
