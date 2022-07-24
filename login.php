<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>

<style>
#tests {
    max-width: 400px;
    width: 100%;
    margin: 100px auto;
    padding: 20px;
    background: #2196f3!important;

}

.tests {
    max-width: 400px;
    width: 100%;
    margin: 100px auto;
    padding: 20px;
    background: #e3cac257;

}

</style>
<body>
    <div id="tests">xxxxxxxxxx</div>
   <div class="tests" >
   
    <h2> Log in</h2> 
    
    <form action="login_process.php" method="post">
    
    <label> Email </label>
    <br>
    <input type="text" name="email">
    <br>

    <label> Password</label>
    <br>

    <input type="text" name="password">
    <br>
    <input type="submit" value="Log in">
    
    <button><a href="register.php">Register</a></button>
    </form>


    </div>

    <?php
    if(isset($_SESSION['test'])){
        echo $_SESSION;
    }
    ?>
</body>
</html>