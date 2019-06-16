<?php 
session_start();

$employeeId=$_SESSION["employeeId"];

    $con=mysqli_connect('localhost','root','');
    if($con)
    {
    //echo nl2br( "\n server connected");
    }
    else
    {
     echo nl2br("\n server not connected");
    }
    if(mysqli_select_db($con,'onedata'))
    {
    //echo nl2br("\n db connected ");
    }
    else
    {
    echo nl2br("\n db not connected");
    }
    
    //$reg_no=$_POST['reg_no'];
$sql="SELECT * FROM details WHERE employeeId='$employeeId' ";


if ($result=mysqli_query($con,$sql))
  {
     $i=0;
     $copy=array();
  while ($row=mysqli_fetch_row($result))
    {
    for($i=0;$i<count($row);$i++)
    $copy[$i]=$row[$i];
    }
    
  $i=0;
  mysqli_free_result($result);
}
if(isset($_POST['update']))
{

    $con=mysqli_connect('localhost','root','');
    if($con)
    {
  // echo nl2br( "\n server connected");
    }
    else
    {
     echo nl2br("\n server not connected");
    }
    if(mysqli_select_db($con,'onedata'))
    {
    //echo nl2br("\n db connected ");
    }
    else
    {
    echo nl2br("\n db not connected");
    }
    $name=$_POST['name'];
    $employeeId=$_POST['employeeId'];
    $employeeId1=$_POST['employeeId1'];
    $designation=$_POST['designation'];
    $dob=$_POST['dob'];
    $doj=$_POST['doj'];
    $gender=$_POST['gender'];
    $bloodGroup=$_POST['bloodGroup'];
    $martialStatus=$_POST['martialStatus'];
    $languagesKnown=$_POST['languagesKnown'];
    $employeeContactNumber=$_POST['employeeContactNumber'];
    $email=$_POST['email'];
    $panNumber=$_POST['panNumber'];
    $aadharNumber=$_POST['aadharNumber'];
    $bankAccountNumber=$_POST['bankAccountNumber'];
    $bankIfscCode=$_POST['bankIfscCode'];
    $religion=$_POST['religion'];
    $caste=$_POST['religion'];
    $numberOfSiblings=$_POST['numberOfSiblings'];
    $residentialAddress=$_POST['residentialAddress'];
    $placeOfArrival=$_POST['placeOfArrival'];
    $travelMode=$_POST['travelMode'];

    $fatherName=$_POST['fatherName'];
    $motherName=$_POST['motherName'];
    $fatherOccupation=$_POST['fatherOccupation'];
    $motherOccupation=$_POST['motherOccupation'];
    $annualIncome=$_POST['annualIncome'];
    $permanantAddress=$_POST['permanantAddress'];
    $parentContactNumber=$_POST['parentContactNumber'];

    $tenthSchoolName=$_POST['tenthSchoolName'];
    $tenthMark=$_POST['tenthMark'];
    $tenthPercentage=$_POST['tenthPercentage'];
    $tenthBoardOfStudy=$_POST['tenthBoardOfStudy'];
    $twelthSchoolName=$_POST['twelthSchoolName'];
    $twelthMark=$_POST['twelthMark'];
    $twelthPercentage=$_POST['twelthPercentage'];
    $twelthBoardOfStudy=$_POST['twelthBoardOfStudy'];

    $linkedinId=$_POST['linkedinId'];
    $skypeId=$_POST['skypeId'];

        $qname="UPDATE details SET name='$name',employeeId='$employeeId',designation='$designation',dob='$dob',doj='$doj',gender='$gender',bloodGroup='$bloodGroup',martialStatus='$martialStatus',languagesKnown='$languagesKnown',employeeContactNumber='$employeeContactNumber',email='$email',panNumber='$panNumber',aadharNumber='$aadharNumber',bankAccountNumber='$bankAccountNumber',bankIfscCode='$bankIfscCode',religion='$religion',caste='$caste',numberOfSiblings='$numberOfSiblings',residentialAddress='$residentialAddress',placeOfArrival='$placeOfArrival',travelMode='$travelMode',fatherName='$fatherName',motherName='$motherName',fatherOccupation='$fatherOccupation',motherOccupation='$motherOccupation',annualIncome='$annualIncome',permanantAddress='$permanantAddress',parentContactNumber='$parentContactNumber',tenthSchoolName='$tenthSchoolName',tenthMark='$tenthMark',tenthPercentage='$tenthPercentage',tenthBoardOfStudy='$tenthBoardOfStudy',twelthSchoolName='$twelthSchoolName',twelthMark='$twelthMark',twelthPercentage='$twelthPercentage',twelthBoardOfStudy='$twelthBoardOfStudy',linkedinId='$linkedinId',skypeId='$skypeId' WHERE employeeId='$employeeId1' ";
            $equ=mysqli_query($con,$qname);
            if($equ)
            {
               echo($employeeId1."\n value");
               echo ("\n  inserted successfully...");
            }
            else
            {
                echo($employeeId1."\n value");
                echo nl2br("\n not inserted");
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
  <form method="post" class="form-signin text-center justify-content-center" style="padding-top:10%;min-width:550px;" enctype="multipart/form-data">
  
    <div class="row justify-content-center">
            

            <?php
            //$reg=$_POST['reg_no'];
                $con=mysqli_connect("localhost","root","");
                
                mysqli_select_db($con,"onedata");
                $qry="SELECT * FROM details";
                $result=mysqli_query($con,$qry);
                //$count=0;
                while($row = mysqli_fetch_array($result))
                {
                    if($row[1]==$employeeId)
                    {
                    echo '<img height="200" width="180" src="data:image;base64,'.$row[38].' ">';
                    }
                }

            ?>

    <div><br>
        <h1 class="text-primary">EMPLOYEE DETAILS</h1><BR>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value=<?php echo $copy[$i];$i++; ?> name="name"> 
                    </div>
                </div><br>
                <?php  $copy[$i];$i++; ?>
                <div class="row">
                    <div class="col-7 text-left">
                       OLD EMPLOYEE ID: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <input type="text" value=<?php echo $copy[1] ?> name="employeeId1">
                    </div>
                </div><br>

                <div class="row">
                    <div class="col-7 text-left">
                       NEW EMPLOYEE ID: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <input type="text" value= <?php echo $copy[1] ?> name="employeeId">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DESIGNATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="designation" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DOB: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="dob" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DOJ: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="doj" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        GENDER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="gender" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        BLOOD GROUP: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="bloodGroup" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MARTIAL STATUS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="martialStatus" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        LANGUAGES KNOWN: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="languagesKnown" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="employeeContactNumber" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         E-MAIL ID: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="email" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PAN CARD NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="panNumber" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        AADHAR CARD NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="aadharNumber">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                      BANK ACCOUNT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> name="bankAccountNumber">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                      BANK IFSC CODE: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> name="bankIfscCode">
                    </div>
                </div><br>
                
                
                <div class="row">
                    <div class="col-7 text-left">
                        RELIGION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="religion">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CASTE: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="caste">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NUMBER OF SIBLINGS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="numberOfSiblings" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        RESIDENTIAL ADDRESS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="residentialAddress" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PLACE OF ARRIVAL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="placeOfArrival" >
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        TRAVEL MODE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="travelMode" >
                    </div>
                </div><br>
<br>
<br>
<br>
<h1 class="text-primary">PARENT DETAILS</h1>
<br>
                <div class="row">
                    <div class="col-7 text-left">
                        FATHER NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="fatherName" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> name="motherName" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        FATHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> name="fatherOccupation" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> name="motherOccupation" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ANNUAL INCOME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="annualIncome" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ADDRESS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> name="permanantAddress" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="parentContactNumber" >
                    </div>
                </div><br>

<br>
<h1 class="text-primary">ACADEMIC DETAILS</h1>
<br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME OF THE SCHOOL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="tenthSchoolName" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH MARK: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                     <input type="text" value=   <?php echo $copy[$i];$i++; ?> name="tenthMark">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="tenthPercentage" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="tenthBoardOfStudy" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME OF THE SCHOOL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="twelthSchoolName" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH MARK:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="twelthMark" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="twelthPercentage" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="twelthBoardOfStudy">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        LINKEDIN ID:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="linkedinId" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        SKYPE ID:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                      <input type="text" value=  <?php echo $copy[$i];$i++; ?> name="skypeId">
                    </div>
                </div><br>





                <br><br><br>
                <input type="submit" class="btn btn-outline-primary" value="Update" name="update"><br>
                <p class="mt-5 mb-3 text-muted">&copy; ONEDATA SOFTWARE SOLUTION PRIVATE LIMITED</p>
</form>
</body>
</html>
