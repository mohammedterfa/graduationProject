<?php
include "login.php";
include_once "connection.php";
$id= $_SESSION['id'];
$query = "delete from patient where id='$id'";
mysqli_set_charset($connect,'utf8');
$result = mysqli_query($connect,$query);
if($result){
    echo "تم الحذف بنجاح"; 
    header("location:findpatienttoview.php?status=success");

}else{
    echo "لم يتم حذف البيانات";
    header("location:findpatienttoview.php?status=failed");
}
        ?>