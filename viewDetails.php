<?php 
session_start();

$employeeId=$_SESSION["employeeId"];

include 'connection.php';

	

$sql="SELECT * FROM details WHERE employeeId='$employeeId' ";
$sql1="SELECT * FROM degree WHERE employeeId='$employeeId' ";
$sql2="SELECT * FROM technology WHERE employeeId='$employeeId' ";
$sql3="SELECT * FROM experience WHERE employeeId='$employeeId' ";
$sql4="SELECT * FROM reference WHERE employeeId='$employeeId' ";

if ($result=mysqli_query($connection,$sql))
  {
	 $i=0;
	 $copy=array();
  while ($row=mysqli_fetch_row($result))
    {
	for($i=0;$i<count($row);$i++)
	$copy[$i]=$row[$i];
	//echo($copy);
    }
	
  $i=0;
  mysqli_free_result($result);
}
if ($result1=mysqli_query($connection,$sql1))
  {
     $t1=1;
     $i1=0;
     $j1=1;
     
     //$copy1.=$j;
     $copy1=array();
         while ($row1=mysqli_fetch_row($result1))
         {
         for($i1=0;$i1<count($row1);$i1++)
         $copy1[$j1][$i1]=$row1[$i1];
         $j1++;$t1=$t1+1;
         }
    
     $i1=1;$j1=1;
     mysqli_free_result($result1);
 }
 if ($result2=mysqli_query($connection,$sql2))
  {
     $t2=1;
     $i2=0;
     $j2=1;
     
     //$copy1.=$j;
     $copy2=array();
         while ($row2=mysqli_fetch_row($result2))
         {
         for($i2=0;$i2<count($row2);$i2++)
         $copy2[$j2][$i2]=$row2[$i2];
         $j2++;$t2=$t2+1;
         }
    
     $i2=1;$j2=1;
     mysqli_free_result($result2);
 }
 if ($result3=mysqli_query($connection,$sql3))
  {
     $t3=1;
     $i3=0;
     $j3=1;
     
     //$copy1.=$j;
     $copy3=array();
         while ($row3=mysqli_fetch_row($result3))
         {
         for($i3=0;$i3<count($row3);$i3++)
         $copy3[$j3][$i3]=$row3[$i3];
         $j3++;$t3=$t3+1;
         }
    
     $i3=1;$j3=1;
     mysqli_free_result($result3);
 }
 if ($result4=mysqli_query($connection,$sql4))
  {
     $t4=1;
     $i4=0;
     $j4=1;
     
     //$copy1.=$j;
     $copy4=array();
         while ($row4=mysqli_fetch_row($result4))
         {
         for($i4=0;$i4<count($row4);$i4++)
         $copy4[$j4][$i4]=$row4[$i4];
         $j4++;$t4=$t4+1;
         }
    
     $i4=1;$j4=1;
     mysqli_free_result($result4);
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
<link rel="icon" href="od icon.jpg" type="image/icon type">
<title>ONEDATA</title>
</head>

<body class="" background="bg1.png">

<div class="container">

<nav class="navbar justify-content-center fixed-top navbar-expand-sm bg-dark navbar-dark">

         
    
       <ul class="nav navbar-nav navbar-right">
       <a href="viewSelect.php"    class="text-white bg-dark"><span class="glyphicon glyphicon-log-out"></span> back</a>
    </ul> 
       <div class="col-md-5"></div>
        <div class="col-md-3">
        <img src="OD LOGO_White.png" alt="Logo" style="width:180px;">  </div>
        <div class="col-md-4"></div>
        
    
</nav> 
<form method="post" class="form-signin text-center justify-content-center" style="padding-top:1%;min-width:550px;" enctype="multipart/form-data">
   
            

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
             <div class="row justify-content-center">
                <div><br><br><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        EMPLOYEE ID: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DESIGNATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DATE OF BARTH: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        DATE OF JOINING: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         GENDER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        BLOOD GROUP: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                      MARTIAL STATUS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        SPOUSE OR HUSBAND NAME:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                         LANGUAGE'S KNOWN: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CONTACT NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        EMAIL ID:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        EMPLOYEE OFFICIAL NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PAN CARD NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PASSPORT NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        EPF NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        INSURANCE NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        AADHAR CARD NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        BANK ACCOUNT NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        BANK IFSC CODE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        RELIGION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CASTE: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NUMBER OF SIBLINGS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        RESIDENTIAL ADDRESS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PLACE OF ARRIVAL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        TRAVEL MODE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><br>
<h2 class="text-secondary">PARENT DETAILS</h2>
<br>
                <div class="row">
                    <div class="col-7 text-left">
                        FATHER NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER NAME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        FATHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        MOTHER OCCUPATION: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        ANNUAL INCOME: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                
                <div class="row">
                    <div class="col-7 text-left">
                        ADDRESS: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        CONTACT NUMBER: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br> <br>
<h2 class="text-secondary">ACADEMIC DETAILS</h2>
<br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME OF THE SCHOOL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH MARK: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        10TH BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        NAME OF THE SCHOOL: 
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH MARK:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH PERCENTAGE:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        12TH BOARD OF STUDIED:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        LINKED IN ID:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        SKYPE ID:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; $i++; ?> 
                    </div>
                </div><br><br>
<h2 class="text-secondary">EMERGENCY CONTACTS DETAILS</h2>
<br>
                <div class="row">
                    <div class="col-7 text-left">
                        PERSON NAME:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        PERSON NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-7 text-left">
                        RELATION:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><br>
  <h2 class="text-secondary">DEGREE DETAILS</h2><br>  
                     <?php  
                     for($j1=1;$j1<$t1;$j1++) 
                     {  
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "DEGREE:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy1[$j1][$i1];$i1++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "DEPARTMENT:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy1[$j1][$i1];$i1++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "CGPA:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy1[$j1][$i1];$i1++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "INSTITUTION:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy1[$j1][$i1];$i1++; echo'</div></div><br>';
                        echo'<div class="row"> <div class="col-7 text-left">';
                        echo "UNIVERSITY:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy1[$j1][$i1];$i1++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "YEAR OF PASSING:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy1[$j1][$i1];$i1++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "PROJECT:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy1[$j1][$i1];$i1++; echo'</div></div><br><br>';
                        //echo nl2br ("\n");
                       
                        $i1=0;

                        
                      }?>

  <h2 class="text-secondary">TECHNOLOGY DETAILS</h2><br>  
                     <?php  

                     for($j2=1;$j2<$t2;$j2++) 
                     {   
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "TECHNOLOGY:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy2[$j2][$i2];$i2++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "RATE:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy2[$j2][$i2];$i2++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "CERTIFICATION:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy2[$j2][$i2];$i2++; echo'</div></div><br><br>';
                       
                        $i2=1;

                        
                      }?>

  <h2 class="text-secondary">EXPERIENCE DETAILS</h2><br>  
                     <?php  
                     for($j3=1;$j3<$t3;$j3++) 
                     {   
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "COMPANY NAME:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy3[$j3][$i3];$i3++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "DESIGNATION:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy3[$j3][$i3];$i3++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "TOTAL EXPERIENCE YEAR:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy3[$j3][$i3];$i3++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "DATE OF JOINED:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy3[$j3][$i3];$i3++; echo'</div></div><br>';
                        echo'<div class="row"> <div class="col-7 text-left">';
                        echo "DATE OF RELIVED:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy3[$j3][$i3];$i3++; echo'</div></div><br><br>';
                        $i3=0;

                        
                      }?>
  <h2 class="text-secondary">REFERENCE DETAILS</h2><br>  
                     <?php  
                     for($j4=1;$j4<$t4;$j4++) 
                     {  
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "NAME:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy4[$j4][$i4];$i4++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "DESIGNATION:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy4[$j4][$i4];$i4++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "ORGANIZATION:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy4[$j4][$i4];$i4++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "CONTACT NUMBER:";echo'</div><div class="col-4 font-weight-bold text-left">' ;
                        echo $copy4[$j4][$i4];$i4++; echo'</div></div><br>';
                        echo'<div class="row"> <div class="col-7 text-left">';
                        echo "EMAIL ID:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy4[$j4][$i4];$i4++; echo'</div></div><br>';
                        $i4=0;

                        
                      }?>

                <p class="mt-5 mb-3 text-muted">&copy; Onedata Software Solution Pvt Ltd</p></div></div>
</form>
</div>
</body>
</html>
