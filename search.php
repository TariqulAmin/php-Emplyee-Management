<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <style>


    
      td a:hover{

     color:black;
     text-decoration: none;

     }

     .success{

      background: green;
      color: white;

     }
 
    </style>
    
     <title>Search</title>
  </head>
  <body>
    
   <div class="container-fluid h-100">
      <div class="mt-3 row h-100">
        <div class="col-3">
          
         <ul class="list-group">
           
         <li class="list-group-item"><i class="fas fa-home"></i></i><a href="index.php"> Home</a></li>
         <li class="list-group-item"><i class="fas fa-user"></i><a href="addemployee.php"> Add Employee</a></li>
         <li class="list-group-item active"><i class="fas fa-search"></i><a href="search.php"> Search Employee</a></li>

         </ul>
        
         </div>

        <div class="col-9">

          <form action="search.php" method="GET">
            
           <div class="form-inline">
            
            
            <input type="text" name="searchinput" class="form-control mr-2 w-25" placeholder="Search Employee">
            <input type="submit" name="searchbutton" value="Search" class="btn btn-outline-secondary">
           </div>
          </form>



          <?php 
  
          require 'connection.php';

          if(isset($_GET['searchbutton'])){

            $search=$_GET['searchinput'];

          if(!empty($search)){

            $query="SELECT * FROM emp_record WHERE name='$search' OR ssn='$search'";
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_all($result,MYSQLI_ASSOC);

          

             foreach ($row as $key) 
            {
              $id=$key['id'];
              $name=$key['name'];
              $ssn=$key['ssn'];
              $dept=$key['dept'];
              $salary=$key['salary'];
              $address=$key['address'];?>
              
                  <h3>Search Result</h3>
              <table class="table">
                <thead>
                  <tr>
                <th>ID</th>
                <th>Employee Name</th>
                <th>SSN</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Address</th>
                  </tr>

            </thead>
                <tbody>
                  <tr>
                <td><?php echo $id; ?></td>
                <td style="color: #66A1D2"><i class="fas fa-user"><?php echo " ".$name; ?></td>
                <td><?php echo $ssn; ?></td>
                <td><?php echo $dept; ?></td>
                <td><?php echo $salary; ?></td>
                <td><?php echo $address; ?></td>

                    
                  </tr>
                </tbody>
              

              </table>

           <?php }


          }

          
          }


        ?>

          
          <h3 class="text-center">List of Employees</h3>
          <table class="mt-5 table table-striped table-hover table-bordered">
            
            <thead>
              <tr>
                <th>ID</th>
                <th>Employee Name</th>
                <th>SSN</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Address</th>
                <th>Delete</th>
                <th>Update</th>

              </tr>

            </thead>

            <?php 
            
            require 'connection.php';  
            
            $query="SELECT * FROM emp_record";
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_all($result,MYSQLI_ASSOC);

            foreach ($row as $key) 
            {
              $id=$key['id'];
              $name=$key['name'];
              $ssn=$key['ssn'];
              $dept=$key['dept'];
              $salary=$key['salary'];
              $address=$key['address']; ?>
            
            <tbody>
              <tr>
                <td><?php echo $id; ?></td>
                <td style="color: #66A1D2"><i class="fas fa-user"><?php echo " ".$name; ?></td>
                <td><?php echo $ssn; ?></td>
                <td><?php echo $dept; ?></td>
                <td><?php echo $salary; ?></td>
                <td><?php echo $address; ?></td>
                <td><a href="delete.php?delete=<?php echo $id ?>"><i class="text-danger fas fa-trash"></i></a></td>
                <td><a href="update.php?update=<?php echo $id ?>"><i class="text-primary fas fa-edit"></i></a></td>
              </tr>
            </tbody> 
           
            <?php } ?>
          



          </table>

          <h3 class="success"><?php if(isset($_GET['message'])){echo $_GET['message'];} ?></h3>
        
        </div>
       

      </div>
    </div>
    
    








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>