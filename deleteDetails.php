<?php 

$employeeId=$_POST["employeeId"];

include 'connection.php';

	

$sql="DELETE * FROM details WHERE employeeId='$employeeId' ";
$sql1="DELETE * FROM degree WHERE employeeId='$employeeId' ";
$sql2="DELETE * FROM technology WHERE employeeId='$employeeId' ";
$sql3="DELETE * FROM experience WHERE employeeId='$employeeId' ";
$sql4="DELETE * FROM reference WHERE employeeId='$employeeId' ";

$result=mysqli_query($connection,$sql);
$result1=mysqli_query($connection,$sql1);
$result2=mysqli_query($connection,$sql2);
$result3=mysqli_query($connection,$sql3);  
$result4=mysqli_query($connection,$sql4);

if($result)
    echo "<script>alert('deleted successfully')</script>"; 
else
    echo "<script>alert('Invalid employee ID')</script>"; 
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

<title>Student Information </title>
</head>

<body class="" background="bg1.png">
<nav class="navbar fixed-top navbar-expand-sm bg-primary navbar-dark " style="min-height:50px">
<a href="detselect.php" id="main" style="color:black;">&larr;Back</a>
    <!-- <ul class="nav-item">
		<img src="logo.png" alt="Logo" style="width:60px;">
	</ul> -->
    <ul class="nav-item" style="padding-left:460px;">
		<a class="navbar-brand justify-content-center display-1 mb-1 font-weight-bold" style="font-size:30px" href="#">STUDENT INFORMATION</a>
	</ul>
</nav><form method="post" class="form-signin text-center justify-content-center" style="padding-top:1%;min-width:550px;" enctype="multipart/form-data">
    <div class="row justify-content-center">
            

            <?php
                include 'connection.php';
				mysqli_select_db($connection,'details');
				$qry="SELECT * FROM details";
				$result=mysqli_query($connection,$qry);
				//$count=0;
				while($row = mysqli_fetch_array($result))
				{
					if($row[1]==$employeeId)
					{
                    echo '<img height="250" width="230" src="data:image;base64,'.$row[39].' ">';
					}
				}

            ?>
    <div><br>
                <br><br><br>
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
                </div><br><div class="row">
                    <div class="col-7 text-left">
                        PAN CARD NUMBER:
                    </div>
                    <div class="col-4 font-weight-bold text-left">
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br><div class="row">
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
                </div><br>

<br>
<h1 class="text-primary">ACADEMIC DETAILS</h1>
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
                        <?php echo $copy[$i];$i++; ?> 
                    </div>
                </div><br>
  <h1 class="text-primary">DEGREE DETAILS</h1><br>  
                     <?php  
                     for($j1=1;$j1<$t1;$j1++) 
                     {  echo nl2br ("\n");echo nl2br ("\n");
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
                        echo $copy1[$j1][$i1];$i1++; echo'</div></div><br>';
                        //echo nl2br ("\n");
                       
                        $i1=0;

                        
                      }?>

  <h1 class="text-primary">TECHNOLOGY DETAILS</h1><br>  
                     <?php  
                     for($j2=1;$j2<$t2;$j2++) 
                     {  echo nl2br ("\n");echo nl2br ("\n");
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "TECHNOLOGY:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy2[$j2][$i2];$i2++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "RATE:";echo'</div><div class="col-4 font-weight-bold text-left">'  ;
                        echo $copy2[$j2][$i2];$i2++; echo'</div></div><br>';
                        echo'<div class="row"><div class="col-7 text-left">';
                        echo "CERTIFICATION:";echo'</div><div class="col-4 font-weight-bold text-left">';
                        echo $copy2[$j2][$i2];$i2++; echo'</div></div><br>';
                       
                        $i2=0;

                        
                      }?>

  <h1 class="text-primary">EXPERIENCE DETAILS</h1><br>  
                     <?php  
                     for($j3=1;$j3<$t3;$j3++) 
                     {  echo nl2br ("\n");echo nl2br ("\n");
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
                        echo $copy3[$j3][$i3];$i3++; echo'</div></div><br>';
                        $i3=0;

                        
                      }?>
  <h1 class="text-primary">REFERENCE DETAILS</h1><br>  
                     <?php  
                     for($j4=1;$j4<$t4;$j4++) 
                     {  echo nl2br ("\n");echo nl2br ("\n");
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
                <p class="mt-5 mb-3 text-muted">&copy; Onedata Software solution</p>
</form>
</body>
</html>
