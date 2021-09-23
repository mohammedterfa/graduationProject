<?php 
session_start();
require_once "connection.php";

if(isset($_POST["viewpatient"])){
    $id = $_POST["id"];

    $query="select * from patient where id='$id'";
    $result = mysqli_query($connect,$query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
            
        $_SESSION['id'] = $row["id"];
        $_SESSION['patientname'] = $row["name"];
        header('Location: patientproccess.php');
                    
        }
    else{
        header('Location: findpatienttoview.php?message=InvalidUserNameandPassword');
    }
}
    


?>