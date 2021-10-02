<?php
session_start();
include_once "connection.php";
if(isset($_POST['editpatient'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $birthdate = $_POST['birthdate'];
    $bloodtype = $_POST['bloodtype'];
    $disease = $_POST['disease'];
    $medicine = $_POST['medicine'];
    $allergy = $_POST['allergy'];
    $labtest = $_FILES['labtest']['name'];
    $phone = $_POST['phone'];
    $anotherphone = $_POST['anotherphone'];


    $temp = explode(".", $_FILES["labtest"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);

    
    $query = "update patient set name='$name',id='$id',gender='$gender',nationality='$nationality',address='$address',birthdate='$birthdate',bloodtype='$bloodtype',disease='$disease',medicine='$medicine',allergy='$allergy',labtest='$newfilename',phone='$phone',anotherphone='$anotherphone' where id='$id' ";
    mysqli_set_charset($connect,'utf8');
    $sql = mysqli_query($connect,$query);

    if($sql){
        move_uploaded_file($_FILES["labtest"]["tmp_name"], "../Files/" . $newfilename);

        echo "تم الحفظ بنجاح"; 
        header("location:edit.php?status=success");

    }else{
        echo "لم يتم حفظ البيانات";
        header("location:edit.php?status=failed");
    }
}
?>