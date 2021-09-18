<?php 
session_start();
require_once "connection.php";

if(isset($_POST["login_btn"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    

    $query="select * from hospital where username='$username' and password='$password'";
    $result = mysqli_query($connect,$query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
            
        $_SESSION['loginUser'] = $row["username"];
        header('Location: hospital.php');
                    
        }
    else{
        header('Location: index.php?message=InvalidUserNameandPassword');
    }
}
    


?>