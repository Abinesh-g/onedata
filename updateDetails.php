<?php 
session_start();

$employeeId=$_SESSION["employeeId"];


    include 'connection.php';


    
$sql="SELECT * FROM details WHERE employeeId='$employeeId' ";


if ($result=mysqli_query($connection,$sql))
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

   




    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $dob=$_POST['dob'];
    $doj=$_POST['doj'];
    $gender=$_POST['gender'];
    $bloodGroup=$_POST['bloodGroup'];
    $martialStatus=$_POST['martialStatus']; 
    $spouseOrHusbandName=$_POST['spouseOrHusbandName'];

    $languagesKnown=$_POST['languagesKnown'];
    $employeeContactNumber=$_POST['employeeContactNumber'];
    $employeeOfficialContactNumber=$_POST['employeeOfficialContactNumber'];
    $email=$_POST['email'];
    $panNumber=$_POST['panNumber'];

    $passportNumber=$_POST['passportNumber'];
    $EPFNumber=$_POST['EPFNumber'];
    $insuranceNumber=$_POST['insuranceNumber'];
    


    $aadharNumber=$_POST['aadharNumber'];
    $bankAccountNumber=$_POST['bankAccountNumber'];
    $bankIfscCode=$_POST['bankIfscCode'];
    $religion=$_POST['religion'];
    $caste=$_POST['caste'];
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

    $emergencyPersonName=$_POST['emergencyPersonName'];
    $emergencyPersonNumber=$_POST['emergencyPersonNumber'];
    $emergencyPersonRelation=$_POST['emergencyPersonRelation'];

        $qname="UPDATE details SET name='$name',employeeId='$employeeId',designation='$designation',dob='$dob',doj='$doj',gender='$gender',bloodGroup='$bloodGroup',martialStatus='$martialStatus',spouseOrHusbandName='$spouseOrHusbandName',languagesKnown='$languagesKnown',employeeContactNumber='$employeeContactNumber',email='$email',panNumber='$panNumber',passportNumber='$passportNumber',EPFNumber='$EPFNumber',insuranceNumber='$insuranceNumber',aadharNumber='$aadharNumber',bankAccountNumber='$bankAccountNumber',bankIfscCode='$bankIfscCode',religion='$religion',caste='$caste',numberOfSiblings='$numberOfSiblings',residentialAddress='$residentialAddress',placeOfArrival='$placeOfArrival',travelMode='$travelMode',fatherName='$fatherName',motherName='$motherName',fatherOccupation='$fatherOccupation',motherOccupation='$motherOccupation',annualIncome='$annualIncome',permanantAddress='$permanantAddress',parentContactNumber='$parentContactNumber',tenthSchoolName='$tenthSchoolName',tenthMark='$tenthMark',tenthPercentage='$tenthPercentage',tenthBoardOfStudy='$tenthBoardOfStudy',twelthSchoolName='$twelthSchoolName',twelthMark='$twelthMark',twelthPercentage='$twelthPercentage',twelthBoardOfStudy='$twelthBoardOfStudy',linkedinId='$linkedinId',skypeId='$skypeId',emergencyPersonName='$emergencyPersonName',employeeContactNumber='$employeeContactNumber',emergencyPersonRelation='$emergencyPersonRelation' WHERE employeeId='$employeeId1' ";
            $equ=mysqli_query($connection,$qname);
            if($equ)
            {
                echo "<script>alert('Value Updated')</script>";
            }
            else
            {
                echo "<script>alert('Value Updated')</script>";
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
<link rel="icon" href="od icon.jpg" type="image/icon type">
<title>ONEDATA</title>

<style>

body {
  background: url('bg1.jpg');
  

  background-size:cover;
 } 
 
</style>

</head>

<body class=""  >
<div class="container">

<nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="updateId.php"    class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul> 
       <div class="col-md-5"></div>
        <div class="col-md-3">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav> 
  <form method="post" class="form-signin text-center justify-content-center" style="padding-top:3%;min-width:550px;" enctype="multipart/form-data">
  
    <div class="row ">
       <div class="col-3"></div>   
         <div class="col-6">
            <?php
                include 'connection.php';
                $qry="SELECT * FROM details";
                $result=mysqli_query($connection,$qry);
                //$count=0;
                while($row = mysqli_fetch_array($result))
                {
                    if($row[1]==$employeeId)
                    {
                    echo '<img height="200" width="180" src="data:image;base64,'.$row[43].' ">';
                    }
                }

            ?>

    <div><br>
        <h2 class="text-secondary">EMPLOYEE DETAILS</h2><br>
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
                        SPOUSE OR HUSBAND NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="spouseOrHusbandName" >
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
                         PERSONAL CONTACT NUMBER: 
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
                         OFFICIAL CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="employeeOfficialContactNumber" >
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
                         PASSPORT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="passportNumber" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         EPF NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="EPFNumber" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         INSURANCE NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="insuranceNumber" >
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
                </div><br> <br> 
<h2 class="text-secondary">PARENT DETAILS</h2>
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
                </div><br> <br>
<h2 class="text-secondary">ACADEMIC DETAILS</h2>
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
                      <input type="text" value=  <?php echo $copy[$i];$i++;$i++; ?> name="skypeId">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         PERSON NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="emergencyPersonName" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="emergencyPersonNumber" >
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         RELATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                       <input type="text" value= <?php echo $copy[$i];$i++; ?> name="emergencyPersonRelarion" >
                    </div>
                </div><br>

</div></div></div> 

                <br><br><br>
                <input class="btn btn-lg btn-primary btn-block" style="background-image: linear-gradient(to left, #141f72,#2cb9f9)"; type="submit"  value="Update" name="update" > 
                <p class="mt-5 mb-3 text-muted">&copy; ONEDATA SOFTWARE SOLUTION PRIVATE LIMITED</p>
</form>
</div>
</body>
</html>
