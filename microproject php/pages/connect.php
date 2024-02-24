<?php
$server="localhost";
$username="root";
$pass="";
$db="movierecommender";
$con=new mysqli($server,$username,$pass,$db);
if($con->connect_error)
{
   echo "Connection Error";
}
else{
    /*echo "Connection successfull";*/
}
?>