<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cibi Cables</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?php include 'msg.php';  ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
        </div>

        <div class="col-md-12">
            <div class="float-left">
                <h2>Customers List</h2>
            </div>            
            <div class="float-right">     
                <a href="add.php" class="btn btn-success ml-3">Add Customer</a>
                <a href="invoice/index.php" class="btn btn-warning ml-3">Invoice</a>
                <a href="register.php" class="btn btn-primary ml-3">Create Account</a>
                <a href="logout.php" class="btn btn-danger ml-3">Sign Out</a>

            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Ph-Number</th>
                  <th scope="col">VLan</th>
                  <th scope="col">Pon</th>
                  <th scope="col">Port</th>
                  <th scope="col">Operator</th>
                  <th scope="col">Status</th>

                </tr>
              </thead>
              <tbody>
                <?php

                include 'Config.php';

                $query="select * from customers ORDER BY custId DESC"; // Fetch all the data from the table customers

                $result=mysqli_query($dbCon,$query);
                ?>

                <?php $counter = 0;
                if ($result->num_rows > 0): ?>

                <?php while($array=mysqli_fetch_row($result)): ?>

                <tr>
                    <th scope="row"><?php echo ++$counter; ?></th>
                    <td><?php echo $array[1];?></td>
                    <td><?php echo $array[2];?></td>
                    <td><?php echo $array[7];?></td>
                    <td><?php echo $array[8];?></td>
                    <td><?php echo $array[9];?></td>
                    <td><?php echo $array[12];?></td>
                    <td><?php echo $array[6];?></td>


                    <td> 
                    <a href="view.php?custId=<?php echo $array[0];?>" class="btn btn-success">View</a>
                      <a href="edit.php?custId=<?php echo $array[0];?>" class="btn btn-primary">Edit</a>
                      <a href="delete.php?custId=<?php echo $array[0];?>" class="btn btn-danger">Delete</a>
                </tr>

                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>

              </tbody>
            </table>
        </div>
    </div>        
</div>

</body>
</html>