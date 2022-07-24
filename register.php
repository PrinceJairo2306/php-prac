<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>


    <h2>
        Registration
    </h2>
    <form action="process_registration.php" method="post">

    <div><?php
     if (isset($_SESSION["error_message"]['fname'])) {
        echo '<div>' . $_SESSION["error_message"]['fname'] . '</div>';
    }?>
    <label for="first_name_id">
            First Name:
        </label>
        <input type="text" name="first_name_name" id="first_name_id">
    </div>
    
    <div><?php 
        if (isset($_SESSION["error_message"]['lname'])) {
            echo  '<div>'.$_SESSION["error_message"]['lname'] .'</div>';
        }?>
        <label for="last_name_id">
            Last Name:
        </label>
        <input type="text" name="last_name_name"  id="last_name_id">
    </div>

        <div>
         <?php 
          if (isset($_SESSION["error_message"]['email'])) {
            echo '<div>'.$_SESSION["error_message"]['email'].'</div>';
        }?>   
        <label for="email_id">
             Email
        </label>
        <input type="email" name="email_name"  id="email_id">
        </div>

        <div>
         <?php 
          if (isset($_SESSION["error_message"]['password'])) {
            echo '<div>'.$_SESSION["error_message"]['password'].'</div>';
        }?>   
        <label for="password_id">
             Password
        </label>
        <input type="text" name="password_name"  id="password_id">
        </div>

        <br>
        
        <input type="submit" value="Register">
        <button ><a href="login.php">Log in</a></button>
        
    </form>

<?php
   if(isset($_SESSION["error_message"])){
    // if (isset($_SESSION["error_message"]['fname'])) {
    //     echo($_SESSION["error_message"]['fname']);
    // }

    // if (isset($_SESSION["error_message"]['lname'])) {
    //     echo($_SESSION["error_message"]['lname']);
    // }
    // if (isset($_SESSION["error_message"]['email'])) {
    //     echo($_SESSION["error_message"]['email']);
    // }
    
   }
    //session_unset();
    if(isset($_SESSION["error_message"])){
    unset($_SESSION["error_message"]);
    }
?>
</body>
</html>
