<?php
include 'config.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crade Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>

  <!-- ///navigation-bar//// -->



<!-- table -->

<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email Address</th>
      <th scope="col">Area</th>
      <th scope="col">Total Ammount</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
      $qrery = 'SELECT * FROM cheack_out';
      $cheack_out = mysqli_query($connection, $qrery);

      $SerialNumber = 1;
      while( $row = mysqli_fetch_assoc($cheack_out)){
              $id = $row['id'];
              $full_name = $row['full_name'];
              $phone_number = $row['phone_number'];
              $email = $row['email'];
              $area = $row['address'];
              $total_ammount = $row['total_ammount'];
              $address = $row['address'];

          echo 
          ' <tr>
      <th scope="row">'.$SerialNumber.'</th>
      <td>'.$full_name.'</td>
      <td>'.$phone_number.'</td>
      <td>'.$email.'</td>
      <td>'.$area.'</td>
      <td>'.$total_ammount.'</td>
      <td>'.$address.'</td>
      <td>
         <a href="edit.php?id='.$id.'" class="btn btn-primary">Edit</a>
        <a href="delete.php?id='.$id.'" class="btn btn-danger">Delete</a>
      </td>
    </tr>';

        $SerialNumber++;
   
      }

    ?>
   
  </tbody>
</table>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>