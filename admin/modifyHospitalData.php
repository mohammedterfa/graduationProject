<?php
include_once "connection.php";
if(isset($_POST['modifyHospitalData'])){
    $hospitalname = $_POST['hospitalname'];
    $hospitalid = $_POST['hospitalid'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "update hospital set hospitalname='$hospitalname',state='$state',address='$address',phone='$phone',username='$username',password='$password' where hospitalid='$hospitalid' ";
    mysqli_set_charset($connect,'utf8');
    $sql = mysqli_query($connect,$query);

    if($sql){
        echo "تم الحفظ بنجاح"; 
        header("location:deleteUpdateHospital.php?status=success");

    }else{
        echo "لم يتم حفظ البيانات";
        header("location:deleteUpdateHospital.php?status=failed");
    }
}
?>