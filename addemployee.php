<?php 

require 'connection.php';

if(isset($_POST['submit'])){

$ename=$_POST['name'];
$essn=$_POST['ssn'];
$edept=$_POST['dept'];
$esalary=$_POST['salary'];
$eaddress=$_POST['address'];

if(!empty($ename) && !empty($essn) && !empty($edept) && !empty($esalary) && !empty($eaddress)){

$query="INSERT INTO emp_record(name,ssn,dept,salary,address) 
        VALUES('$ename','$essn','$edept','$esalary','$eaddress')";


if($execute=mysqli_query($conn,$query)){

echo '<h4 class="success">Employee Added</h4>';

}else{

echo '<h4 class="error">Error Adding Record</h4>';

}
}

else{

echo '<h4 class="error">Fill All Fields</h4>';

}

}


?>




<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
     .success{

     background-color: green;
    color:white;

     }

     .error{

     background-color: red;
     color:white;

     }

    </style>
    
    <title>Register</title>
  </head>
  <body>
    

     <div class="container-fluid h-100">
      <div class="mt-3 row h-100">
        <div class="col-3">
          
         <ul class="list-group">
           
         <li class="list-group-item"><i class="fas fa-home"></i></i><a href="index.php"> Home</a></li>
         <li class="list-group-item  active"><i class="fas fa-user"></i><a href="addemployee.php"> Add Employee</a></li>
         <li class="list-group-item"><i class="fas fa-search"></i><a href="search.php"> Search Employee</a></li>
  
         </ul>
        
        </div>

        <div class="col-9">
          
          <h1>Add Emplyee</h1>

          <hr>

          <div></div>
       
          <form action="addemployee.php" method="POST">
            
            <div class="form-group">
              <label class="text-info">Emplyee Name</label>
              <input type="text" name="name" value="" class="form-control w-50">
            </div>

            <div class="form-group">
              <label class="text-info">Social Security Number</label>
              <input type="text" name="ssn" value="" class="form-control w-50">
            </div>

            <div class="form-group">
              <label class="text-info">Department</label>
              <input type="text" name="dept" value="" class="form-control w-50">
            </div>

            <div class="form-group">
              <label class="text-info">Salary</label>
              <input type="text" name="salary" value="" class="form-control w-50">
            </div>

            <div class="form-group">
              <label class="text-info">Home Address</label>
              <textarea name="address" value="" class="form-control w-50"></textarea>
            </div>

            <input type="submit" name="submit" value="Submit Your Record" class="btn btn-dark">

          </form>

        </div>
       

      </div>
    </div>
    









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>