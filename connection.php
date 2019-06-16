<?php

$connection = mysqli_connect("localhost", "root", "");

 if(mysqli_select_db($connection,"onedata"))
 {
 	//echo "db connected";
 }
 else
 {
 	echo "db not connected";
 }

 ?>