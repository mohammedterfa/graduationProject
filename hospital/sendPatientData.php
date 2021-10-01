<?php
include "login.php";
include_once "connection.php";
if(isset($_POST['sendData'])){
    
    $patientId = $_POST['id'];
    $toHosId = $_SESSION['toHosIdForQuery'];
    $inHosId = $_SESSION['HosIdForQuery'];


    
    $query = "insert into hospitaltransformation(patientid, fromhospitalid, tohospitalid) values('$patientId','$inHosId','$toHosId')";
    mysqli_set_charset($connect,'utf8');
    $sql = mysqli_query($connect,$query);

    if($sql){
        

        echo "تم تحويل المريض بنجاح ... يرجى انتظار الموافقة"; 
        header("location:transfer.php?status=success");

    }else{
        echo "لم يتم العملية ";
        header("location:transfer.php?status=failed");
    }
}
?>