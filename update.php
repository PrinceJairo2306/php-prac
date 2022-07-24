<?php

$first_name = $_POST['first_name_name'];
$last_name = $_POST['last_name_name'];
$email_name = $_POST['email_name'];


    // Create connection
    $conn = new mysqli("localhost", "root", "", "shopp");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $update_customer_query = "UPDATE tbl_registration SET first_name='$first_name', last_name='$last_name', email='$email_name'
    WHERE id=" . $_GET['id'];


    if ($conn->query($update_customer_query) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    header("Location: home.php");
    $conn->close();

?>