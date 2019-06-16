<?php
$connect = mysqli_connect("localhost", "root", "", "onedata");
$sql = "SELECT * FROM details ORDER BY `details`.employeeId,`NAME` ASC";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head> 
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<title>ONEDATA </title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body class="" background="bg1.png"></body>
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
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center">EXPORT DATA TO EXCEL FORMAT</h2><br /> 
    <table class="table table-bordered">
     <tr>  
                        <th>NAME</th><th>EMPLOYEE ID</th><th>DESIGNATION</th><th>DATE OF BIRTH</th><th>DATE OF JOINING</th><th>GENDER</th><th>BLOODGROUP</th><th>MARTIAL STATUS</th><th>LANGUAGES KNOWN</th><th>CONTACT NUMBER</th><th>EMAIL ID</th><th>PAN CARD NUMBER</th>
						<th>AADHAR CARD NUMBER</th><th>BANK ACCOUNT NUMBER</th><th>BANK IFSC CODE</th><th>RELIGION</th>
						<th>CASTE</th>
            <th>NUMBER OF SIBLINGS</th><th>RESIDENTIAL ADDRESS</th>
						<th>PLACE OF ARRIVAL</th><th>TRAVALMODE</th>
            <th>FATHERNAME</th><th>MOTHERNAME</th><th>FATHER OCCUPATION</th><th>MOTHER OCCUPATION</th>
						<th>ANNUAL INCOME</th><th>ADDRESS</th>
						<th>CONTECT NUMBER</th><th>NAME OF SCHOOL</th>
						<th>10TH MARK</th><th>10TH PERCENTAGE</th><th>10TH BOARD</th><th>NAME OF SCHOOL</th><th>12TH MARK</th><th>12TH PERCENTAGE</th>
						<th>12TH BOARD</th><th>LINKEDIN ID</th><th>SKYPE ID</th>
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        ?>
       <tr>  
        <td><?=$row["name"];?></td>
<td><?=$row["employeeId"];?></td>
<td><?=$row["designation"];?></td>
<td><?=$row["dob"];?></td>
<td><?=$row["doj"];?></td>
<td><?=$row["gender"];?></td>
<td><?=$row["bloodGroup"];?></td>
<td><?=$row["martialStatus"];?></td>
<td><?=$row["languagesKnown"];?></td>
<td><?=$row["employeeContactNumber"];?></td>
<td><?=$row["email"];?></td>
<td><?=$row["panNumber"];?></td>
<td><?=$row["aadharNumber"];?></td>
<td><?=$row["bankAccountNumber"];?></td>
<td><?=$row["bankIfscCode"];?></td>
<td><?=$row["religion"];?></td>
<td><?=$row["caste"];?></td>
<td><?=$row["numberOfSiblings"];?></td>
<td><?=$row["residentialAddress"];?></td>
<td><?=$row["placeOfArrival"];?></td>
<td><?=$row["travelMode"];?></td>

<td><?=$row["fatherName"];?></td>
<td><?=$row["motherName"];?></td>
<td><?=$row["fatherOccupation"];?></td>
<td><?=$row["motherOccupation"];?></td>
<td><?=$row["annualIncome"];?></td>
<td><?=$row["permanantAddress"];?></td>
<td><?=$row["parentContactNumber"];?></td>

<td><?=$row["tenthSchoolName"];?></td>
<td><?=$row["tenthMark"];?></td>
<td><?=$row["tenthPercentage"];?></td>
<td><?=$row["tenthBoardOfStudy"];?></td>
<td><?=$row["twelthSchoolName"];?></td>
<td><?=$row["twelthMark"];?></td>
<td><?=$row["twelthPercentage"];?></td>
<td><?=$row["twelthBoardOfStudy"];?></td>
<td><?=$row["linkedinId"];?></td>
<td><?=$row["skypeId"];?></td>
       </tr>  
        <?php  
     }
     ?>
    </table>
    <br />
    <form method="post" action="export.php">
    <center>
     <input type="submit" name="export" class="btn btn-outline-primary" value="EXPORT DETAILS" />
    <p class="mt-5 mb-3 text-muted">&copy; ONEDATA SOFTWARE SOLUTION PRIVATE SOLUTION</p>
    </center>
    </form>
   </div>  
  </div>  
 </body>  
</html>


