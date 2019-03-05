<?php 


$server="localhost";
$user="root";
$password="";
$database="record";

$conn=mysqli_connect($server,$user,$password,$database);

if(!$conn){

echo 'database error '.mysqli_connect_error($conn);

}


 ?>