<?php
include_once "connection.php";
if(isset($_POST['addnewhospital'])){
    $hospitalname = $_POST['hospitalname'];
    $hospitalid = $_POST['hospitalid'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $query = "insert into hospital values('$hospitalname','$hospitalid','$state','$address','$phone','$username','$password')";
    mysqli_set_charset($connect,'utf8');
    $sql = mysqli_query($connect,$query);

    if($sql){
        echo "تم الحفظ بنجاح"; 
        header("location:addNewHospital.php?status=success");

    }else{
        echo "لم يتم حفظ البيانات";
        header("location:addNewHospital.php?status=failed");
    }
}
?>