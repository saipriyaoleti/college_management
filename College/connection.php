<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="college_management";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
   // echo "connection Ok";
}
else{
    echo "connection Failed".mysqli_connect_error();
}
?>