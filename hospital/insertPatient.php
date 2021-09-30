<?php
include_once "connection.php";
if(isset($_POST['addnewpatient'])){
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
    
    $query = "insert into patient values('$name','$id','$gender','$nationality','$address','$birthdate','$bloodtype','$disease','$medicine','$allergy','$newfilename','$phone','$anotherphone')";
    mysqli_set_charset($connect,'utf8');
    $sql = mysqli_query($connect,$query);

    if($sql){
        
        
        move_uploaded_file($_FILES["labtest"]["tmp_name"], "../Files/" . $newfilename);

        echo "تم الحفظ بنجاح"; 
        header("location:addNewPetientRecord.php?status=success");

    }else{
        echo "لم يتم حفظ البيانات";
        header("location:addNewPetientRecord.php?status=failed");
    }
}
?>