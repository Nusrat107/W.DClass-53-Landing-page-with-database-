<?php
    include 'config.php';
?>

<?php


    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "DELETE FROM cheack_out WHERE id = $id";
        $deleteData = mysqli_query($connection, $query);

        if($deleteData == true){
            header('location:index.php');
        }
        else{
            echo "Failed to delete data";
        }
    }
    else{
        echo "No Id is found!!";
    }
?>