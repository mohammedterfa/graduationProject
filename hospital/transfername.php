<?php 
session_start();
require_once "connection.php";

if(isset($_POST["viewname"])){
    $id = $_POST["id"];

    $query="select * from patient where id='$id'";
    $result = mysqli_query($connect,$query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
            
        $_SESSION['transferid'] = $row["id"];
        $_SESSION['transfername'] = $row["name"];
        header('Location: viewnametransfer.php');
                    
        }
    else{
        header('Location: transfer.php?message=InvalidUserNameandPassword');
    }
}
    


?>