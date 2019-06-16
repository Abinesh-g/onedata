<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "onedata");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM details ORDER BY `details`.employeeId,`NAME` ASC";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
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
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  

<td>'.$row["name"].'</td>
<td>'.$row["employeeId"].'</td>
<td>'.$row["designation"].'</td>
<td>'.$row["dob"].'</td>
<td>'.$row["doj"].'</td>
<td>'.$row["gender"].'</td>
<td>'.$row["bloodGroup"].'</td>
<td>'.$row["martialStatus"].'</td>
<td>'.$row["languagesKnown"].'</td>
<td>'.$row["employeeContactNumber"].'</td>
<td>'.$row["email"].'</td>
<td>'.$row["panNumber"].'</td>
<td>'.$row["aadharNumber"].'</td>
<td>'.$row["bankAccountNumber"].'</td>
<td>'.$row["bankIfscCode"].'</td>
<td>'.$row["religion"].'</td>
<td>'.$row["caste"].'</td>
<td>'.$row["numberOfSiblings"].'</td>
<td>'.$row["residentialAddress"].'</td>
<td>'.$row["placeOfArrival"].'</td>
<td>'.$row["travelMode"].'</td>

<td>'.$row["fatherName"].'</td>
<td>'.$row["motherName"].'</td>
<td>'.$row["fatherOccupation"].'</td>
<td>'.$row["motherOccupation"].'</td>
<td>'.$row["annualIncome"].'</td>
<td>'.$row["permanantAddress"].'</td>
<td>'.$row["parentContactNumber"].'</td>

<td>'.$row["tenthSchoolName"].'</td>
<td>'.$row["tenthMark"].'</td>
<td>'.$row["tenthPercentage"].'</td>
<td>'.$row["tenthBoardOfStudy"].'</td>
<td>'.$row["twelthSchoolName"].'</td>
<td>'.$row["twelthMark"].'</td>
<td>'.$row["twelthPercentage"].'</td>
<td>'.$row["twelthBoardOfStudy"].'</td>
<td>'.$row["linkedinId"].'</td>
<td>'.$row["skypeId"].'</td>

                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=ONEDATA-EMPLOYEE-DETAILS.xls');
  echo $output;
 }
}
?>
