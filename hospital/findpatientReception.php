<?php 
session_start();
require_once "connection.php";

if(isset($_POST["viewpatientReception"])){
    $id = $_POST["id"];

    $query="select * from hospitaltransformation where patientid='$id'";
    $result = mysqli_query($connect,$query);

    $query2="select * from patient where id='$id'";
    $result2 = mysqli_query($connect,$query2);    

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $row2 = mysqli_fetch_assoc($result2);
            
        $_SESSION['idReception'] = $id;
        $_SESSION['fromhospitalid2'] = $row["fromhospitalid"];
        $_SESSION['tohospitalid2'] = $row["tohospitalid"];
        $_SESSION['patientnameReception'] = $row2["name"];
        header('Location: viewnameReception.php');
                    
        }
    else{
        header('Location: patientReception.php?message=InvalidUserNameandPassword');
    }
}
    


?>