<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="tsf_bank";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connection Sucess";
}
else
{
   // echo "Connection Failed",mysqli_connect_error;
}




?>