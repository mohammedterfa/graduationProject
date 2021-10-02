<?php
session_start();
include_once "connection.php";
if(isset($_POST['confirmationOfReception'])){
    $patientid = $_SESSION['idReception'];
    $fromhospitalid = $_SESSION['fromhospitalid2'];
    $tohospitalid = $_SESSION['tohospitalid2'];
    $query = "insert into reception(patientid, fromhospitalid, tohospitalid) values('$patientid','$fromhospitalid','$tohospitalid')";
    mysqli_set_charset($connect,'utf8');
    $sql = mysqli_query($connect,$query);

    if($sql){

        echo "تم الحفظ بنجاح"; 
        header("location:hospital.php?status=success");

    }else{
        echo "لم يتم حفظ البيانات";
        header("location:hospital.php?status=failed");
    }
}
?>