<?php 

if(isset($_POST['Submit']))
{ 
        include 'connection.php';

        $employeeId=$_POST['employeeId'];
        $flag="0";
        include 'connection.php';
        $qry="SELECT * FROM details";
        $result=mysqli_query($connection,$qry);
        //$count=0;
        while($row = mysqli_fetch_array($result))
        {
          if($row[1]==$employeeId)
          {
                 $flag="1";    
          }
          
        }
        if($flag=="1")
        {
            $sql="DELETE FROM details WHERE employeeId='$employeeId' ";
            $sql1="DELETE FROM degree WHERE employeeId='$employeeId' ";
            $sql2="DELETE FROM technology WHERE employeeId='$employeeId' ";
            $sql3="DELETE FROM experience WHERE employeeId='$employeeId' ";
            $sql4="DELETE FROM reference WHERE employeeId='$employeeId' ";

            $result=mysqli_query($connection,$sql);
            $result1=mysqli_query($connection,$sql1);
            $result2=mysqli_query($connection,$sql2);
            $result3=mysqli_query($connection,$sql3);  
            $result4=mysqli_query($connection,$sql4);

           if($result)
              echo "<script>alert('deleted successfully')</script>"; 
           
        }
        else
            echo "<script>alert('Invalid EmployeeID')</script>";


}

 ?>


<html>
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

body {
  background: url('EIS_Employee-ID-BG.jpg');
  background-repeat:no-repeat;

  background-size:cover;
 } 

.align-center{
text-align: center;

}
</style>
<title>ONEDATA  </title>
</head>

<nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="main.php"    class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul> 
       <div class="col-md-5"></div>
        <div class="col-md-3">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav> 
<body class="" background="EIS_Employee-ID-BG.jpg">


<form method="post" action="">
<div class="container">
<div class="row" style="margin-top: 200px">
        <div class="col-md-5"></div>
        <div class="col-md-2">
        <h3 style="padding-left:25px;  width:210px;" >EMPLOYEE ID</h3>
        </div>
    </div></div>
    <br><br>
    <div class="container">
    <div class="row">
         <div class="col-md-5"></div>
        <div class="col-md-2">
        <input type="text" name="employeeId" class="form-control " style="width:210px;" placeholder="Enter Employee ID" required>

        </div>
    </div>

       <br>
        <div class="row">
         <div class="col-md-5"></div>
         <div class="col-md-2">
         <input class="btn btn-default btn-primary btn-block" style=" background-image: linear-gradient(to left, #141f72 , #2cb9f9); Width:210px;"; type="submit"  value="Submit"name="Submit" onclick="return confirm('Are you sure you want to delete this item?');" ><br><br></center>
    
            </div>
        </div>
    </div>
</div>

</div>
</form>
</div>
</body>
    <footer style="top:180px; margin-top: 135px">
      <p class="mt-2 mb-3 text-center" >&copy; Onedata Software Solution Pvt Ltd</p>
    </footer>



</html>
