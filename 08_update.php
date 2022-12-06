<?php
    $username = 'greente1';
    $password = 'z9s116[K(ZyPMu';
    $hostname = 'localhost';
    $database = 'greente1_reservation';
    $id = $_GET['id'];

    $conn = new mysqli($hostname, $username, $password, $database) or die("Error Connecting to DB: " . mysqli_connect_error());
    $sql = "UPDATE sets SET order_status = 'Confirmed' WHERE customer_id = '$id'";
    header("Location: 09_newReservation.php");

    if(mysqli_query($conn, $sql)){
        //include('09_newReservation.php');
    } else {
        echo "ERROR: Could not able to execute $sql. "
                                . mysqli_error($conn);
    }
    mysqli_close($conn);