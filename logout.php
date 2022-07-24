<?php 
session_start();
if(isset($_SESSION['first_name'])){
     session_unset();
}
header("Location: login.php");
?>

