<?php
include_once "connection.php";
if(isset($_POST['addNewAdmin'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    
    $query = "insert into admin (id, username ,password,name,email ,phone) values ('$id' ,'$username' ,'$password' ,'$name' ,'$email' ,'$phone')";
    mysqli_set_charset($connect,'utf8');
    $sql = mysqli_query($connect,$query);

    if($sql){
        echo "تم الحفظ بنجاح"; 
        header("location:addNewAdmin.php?status=success");

    }else{
        echo "لم يتم حفظ البيانات";
        header("location:addNewAdmin.php?status=failed");
    }
}
?>