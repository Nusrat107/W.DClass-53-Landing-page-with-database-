<?php
    include 'config.php';

?>

<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM cheack_out WHERE id = $id";

        $singleData = mysqli_query($connection, $query);

        $realData = mysqli_fetch_assoc($singleData);

        $id = $realData['id'];
        $full_name = $realData['full_name'];
        $phone_number = $realData['phone_number'];
        $email = $realData['email'];
        $area = $realData['area'];
        $total_ammount = $realData['total_ammount'];
        $address = $realData['address'];
    }

    if(isset($_POST['submit'])){
        $id = $_GET['id'];
        $full_name = $_POST['full_name']; 
        $phone_number = $_POST['phone_number']; 
        $email = $_POST['email'];
        $area = $_POST['area'];
        $total_ammount = $_POST['total_ammount'];
        $address = $_POST['address'];

        $query = "UPDATE cheack_out SET full_name = '$full_name', phone_number = '$phone_number', email = '$email', area = '$area', total_ammount = '$total_ammount', address = '$address' WHERE id = $id";
        $updatetData = mysqli_query($connection, $query);

        if($updatetData == true){
            header('location:index.php');
        }
        else{
            echo "Failed to insert data";
        }


    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

<section class="mt-5" id="checkout">
  <div class="container">
      <h2  class="mt-5 h1-tag1">Checkout</h2>
      <form action="" method="post" class="Cheackout-form mt-5">
          <div class="mb-3 mt-5">
              <label for="" class="form-label">Full Name*</label>
              <input type="text" class="form-control" name="full_name" value="<?php echo $full_name ?>" id="" placeholder="Your full name*" required>
          </div>
          <div class="mb-3">
              <label for="" class="form-label">Phone Number*</label>
              <input type="text" class="form-control" name="phone_number" value="<?php echo $phone_number ?>" id="" placeholder="Your Phone number*" required>
          </div>
          <div class="mb-3">
              <label for="" class="form-label">Email Address*</label>
              <input type="text" class="form-control" name="email" value="<?php echo $email ?>" id="" placeholder="Your email address*" required>
          </div>
          
         
          <label for="" class="form-label">Area*</label><br>
                <select name="area" id="" value= "<?php echo $area ?>" class="form-control input">
                    <option value="" selected disabled>Select Area</option>
                    <option value="">Inside Dhaka</option>
                    <option value="">Outside Dhaka</option>
                    
                </select>

                <div class="mb-3 mt-3">
                  <label for="" class="form-label">Total Ammount*</label>
                  <input type="text" class="form-control" name="total_ammount" value="<?php echo $total_ammount ?>" id="" placeholder="Your total ammount*" required>
              </div>
                <div class="mb-3">
                  <label for="" class="form-label">Address*</label>
                  <textarea class="form-control" name="address" value="<?php echo $address ?>" id="" placeholder="Your full address*"></textarea>
              </div>
          <button type="submit" name="submit" class="btn button-1">Update</button>
         
         
      </form>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>