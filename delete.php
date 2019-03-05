<?php 


require 'connection.php';

if(isset($_GET['delete'])){

$delete_record=$_GET['delete'];

$query="DELETE FROM emp_record WHERE id=$delete_record";

if(mysqli_query($conn,$query)){

header('Location:search.php?message=Record Deleted');



}


}


 ?>