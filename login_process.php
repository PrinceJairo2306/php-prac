<?php 

session_start(); 
$conn = new mysqli("localhost", "root", "", "shopp");

if($conn->connect_error){
    die("Failed to create Connection" . $conn->connect_error);
}


if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header("Location: login.php");
        exit();

    }else if(empty($password)){
        header("Location: login.php");
        exit();

    }else{

        $select_sql = "SELECT * FROM tbl_registration WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $select_sql);

        if (mysqli_num_rows($result) > 0) {
            
            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $password ) {

                echo "Logged in!";

                $_SESSION['first_name'] = $row['first_name'];

                $_SESSION['email'] = $row['email'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['id'] = $row['id'];

                header("Location: products.php");
                exit();

            }else{
                header("Location: login.php?error=Incorect User name or password");
                exit();

            }
        }else{
            header("Location: login.php?error=Incorect User name or password");
            exit();

        }

    }


}else{

    $_SESSION['test']= "test";

    header("Location: login.php");

    exit();

}