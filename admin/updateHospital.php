<?php
if(isset($_POST['deleteHospital'])){
    include "login.php";
    include_once "connection.php";
    $id= $_POST['state'];
    $query = "delete from hospital where hospitalid='$id'";
    mysqli_set_charset($connect,'utf8');
    $result = mysqli_query($connect,$query);
    if($result){
        echo "تم الحذف بنجاح"; 
        header("location:deleteUpdateHospital.php?status=success");

    }else{
        echo "لم يتم حذف البيانات";
        header("location:deleteUpdateHospital.php?status=failed");
    }
}
if(isset($_POST['udpateHospital'])){
    include "login.php";
    include_once "connection.php";
    $id= $_POST['state'];
    $query = "select * from hospital where hospitalid='$id'";
    mysqli_set_charset($connect,'utf8');
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cloud Based Healthcare Facilitie</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js" integrity="sha512-7yA/d79yIhHPvcrSiB8S/7TyX0OxlccU8F/kuB8mHYjLlF1MInPbEohpoqfz0AILoq5hoD7lELZAYYHbyeEjag==" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="addstyle.css">
        <link rel="stylesheet" href="../css/admin.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="wrapper">
        <div class="admin-navbar">
            <div class="left">
                <ul>
                <li><a href="admin.php"><i class="fas fa-home"></i></a></li>
                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                <li><a href="#"><i class="fas fa-bell"></i></a></li>
                </ul>
            </div>
            <div class="right">
                <ul>
                <li><a href="#">
                    <p><?php  echo $_SESSION['loginUser'];?><br><span>Admin</span></p>
                    <img src="../img/profile.png" width="40">
                    <i class="fas fa-angle-down"></i>
                </a>
                <div class="dropdown">
                    <ul>
                    <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                    <li><a href="#"><i class="fas fa-sliders-h"></i>Setting</a></li>
                    <li><a href="#"><i class="fas fa-sign-out-alt"></i>Signout</a></li>
                    </ul>
                </div>
                </li>
                </ul>
            </div>
        </div>
    </div>

        <center>
        <div class="formStyle">
        <form action="modifyHospitalData.php" method="post" class="login-form">
            <h1>تعديل بيانات المستشفى</h1>

            <div class="textb">اسم المستشفى
                <input type="text" required name="hospitalname" value="<?php echo $row[0];?>">
                <div class="placeholder" value=""></div>
            </div>
            <div class="textb">الرقم التسلسلي
                <input type="text" required name="hospitalid" readonly value="<?php echo $row[1];?>">
                <div class="placeholder"></div>
            </div>
            

            <div class="select">
                
            
                <select name="state">
                <option value="<?php echo $row[2];?>"><?php echo $row[2];?></option>
                <option value="الخرطوم">الخرطوم</option>
                <option value="الجزيرة" >الجزيرة</option>
                <option value="كسلا" >كسلا</option>
                <option value="القضارف">القضارف</option>
                <option value="سنار">سنار</option>
                <option value="النيل الابيض">النيل الابيض</option>
                <option value="النيل الازرق">النيل الازرق</option>
                <option value="الشمالية">الشمالية</option>
                <option value="نهر النيل">نهر النيل</option>
                <option value="شمال كردفان">شمال كردفان</option>
                <option value="غرب كردفان">غرب كردفان</option>
                <option value="جنوب كردفان">جنوب كردفان</option>
                <option value="شمال دارفور">شمال دارفور</option>
                <option value="غرب دارفور">غرب دارفور</option>
                <option value="جنوب دارفور">جنوب دارفور</option>
                <option value="شرق دارفور">شرق دارفور</option>
                <option value="وسط دارفور">وسط دارفور</option>
                </select >        
               
            </div>

            <div class="textField">الوصف الدقيق للعنوان
                <input type="text"  required name="address" value="<?php echo $row[3];?>">
                <div class="placeholder"></div>
            </div>
            
            
            <div class="textb">رقم الهاتف
                <input type="text" required name="phone" value="<?php echo $row[4];?>">
                <div class="placeholder"></div>
            </div>

            <div class="textb">اسم المستخدم
                <input type="text" required name="username" value="<?php echo $row[5];?>">
                <div class="placeholder"></div>
            </div>

            <div class="textb">كلمة المرور
                <input type="text" required name="password" value="<?php echo $row[6];?>">
                <div class="placeholder"></div>
            </div>
            

            

            <center><button class="btnnew"  name="modifyHospitalData" type="submit">تعديل  بيانات المستشفى</button>
            
        </form>

     
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.querySelector(".right ul li").addEventListener("click",function(){
            this.classList.toggle("active");
        });
    </script>
    <script>
         <?php 
      if(isset($_GET['status'])){
        if($_GET['status'] == 'success'){
           ?>
           
               swal({
                    title: "تمت العملية",
                    text: "تمت اضافة المستشفى بنجاح",
                    icon: "success",
                    button: "تم",
                    });
           
           <?php
        }else{
            ?>
            swal ( "لم تتم العملية" ,  "تعذر اضافة المستشفى" ,  "error" );
            <?php
        }
      }
      ?>
    </script>
    <?php }?>
    </body>
</html>