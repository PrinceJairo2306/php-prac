<?php
session_start();

$first_name = $_POST['first_name_name'];
$last_name = $_POST['last_name_name'];
$email_name = $_POST['email_name'];
$password_name = $_POST['password_name'];


$error=false;


if (empty($first_name) ){
    
    $_SESSION["error_message"]['fname'] = "First Name is required";
   
    $error=true;
}
if(empty($last_name)){
    
    $_SESSION["error_message"]['lname'] = "Last Name is required";
    $error=true;
}
if(empty($email_name)){
  
    $_SESSION["error_message"]['email'] = "Email is required";
    
    $error=true; 
}
if(empty($password_name)){
  
    $_SESSION["error_message"]['password'] = "Password is required";
    
    $error=true; 
}

if($error) {
header("Location: register.php");
}

else {
    //Create connection
    $conn = new mysqli("localhost", "root", "", "shopp");
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $insert_customer_querry = "INSERT INTO tbl_registration (first_name, last_name,email,password)
    VALUES ('$first_name', '$last_name','$email_name','$password_name')";
    
    if ($conn->query($insert_customer_querry) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insert_customer_querry . "<br>" . $conn->error;
    }
    $conn->close();
         header("Location: home.php");
        echo 'not empty';
    }
?>

