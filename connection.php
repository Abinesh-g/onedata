<?php

$connection = mysqli_connect("localhost", "root", "OdS@0123");

 if(mysqli_select_db($connection,"employee"))
 {
 	//echo "db connected";
 }
 else
 {
 	echo "db not connected";
 }

 ?>