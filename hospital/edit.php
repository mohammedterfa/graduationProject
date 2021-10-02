<?php
    include "login.php";
    include_once "connection.php";
    $id= $_SESSION['id'];
    $query = "select * from patient where id='$id'";
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
                <li><a href="hospital.php"><i class="fas fa-home"></i></a></li>
                <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                <li><a href="#"><i class="fas fa-bell"></i></a></li>
                </ul>
            </div>
            <div class="right">
                <ul>
                <li><a href="#">
                    <p><?php  echo $_SESSION['loginUser'];?><br><span>hospital</span></p>
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
        <form action="editpatient.php" method="post" class="login-form" enctype="multipart/form-data">
            <h1>تعديل سجل مريض </h1>

            <div class="textb">اسم المريض كامل
                <input type="text" required name="name" value="<?php echo $row['name']; ?>">
                <div class="placeholder"></div>
            </div>
            <div class="textb">الرقم التسلسلي للسجل المرضي
                <input type="text" required name="id" value="<?php echo $row['id']; ?>">
                <div class="placeholder"></div>
            </div>

            <div class="select" >
                <select name="gender">
                <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                <option value="ذكر">ذكر</option>
                <option value="أنثى">أنثى</option>               
                </select >        
               
            </div>
            <div class="select" >
                <select name="nationality">
                <option value="<?php echo $row['nationality']; ?>"><?php echo $row['nationality']; ?></option>
                <option value="سوداني">سوداني</option>
                <option value="مصري">مصري</option>
                <option value="اردني">اردني</option>
                <option value="سعودي">سعودي</option>
                <option value="قطري">قطري</option>
                <option value="إماراتي">إماراتي</option>
                <option value="كويتي">كويتي</option>
                <option value="عماني">عماني</option>

               
                </select >        
               
            </div>

            <div class="textField">عنوان سكن المريض
                <input type="text"  required name="address" value="<?php echo $row['address']; ?>">
                <div class="placeholder"></div>
            </div>

            <div class="textField">تاريخ الميلاد
                <input type="date"  required name="birthdate" value="<?php echo $row['birthdate']; ?>">
                <div class="placeholder"></div>
            </div>
            
            <div class="select" >
                <select name="bloodtype">
                <option value="<?php echo $row['bloodtype']; ?>"><?php echo $row['bloodtype']; ?></option>
                <option value="+A">+A</option>
                <option value="+B">+B</option>
                <option value="+AB">+AB</option>
                <option value="+O">+O</option>
                <option value="-A">-A</option>
                <option value="-B">-B</option>
                <option value="-AB">-AB</option>
                <option value="-O">-O</option>

               
                </select >        
               
            </div>

            <div class="textb">المرض/ الأمراض
                <input type="text" required name="disease" value="<?php echo $row['disease']; ?>">
                <div class="placeholder"></div>
            </div>

            <div class="textb">الدواء / الأدوية
                <input type="text" required name="medicine" value="<?php echo $row['medicine']; ?>">
                <div class="placeholder"></div>
            </div>

            <div class="textb">الأدوية التي تسبب حساسية للمريض أو الممنوعة
                <input type="text" required name="allergy" value="<?php echo $row['allergy']; ?>">
                <div class="placeholder"></div>
            </div>

            <div class="textb">(pdf)نتائج الاختبارات المعملية
                <input type="file"  name="labtest" value="<?php echo $row['labtest']; ?>">
                <div class="placeholder"></div>
            </div>
            
            <div class="textb">رقم هاتف المريض
                <input type="text" required name="phone" value="<?php echo $row['phone']; ?>">
                <div class="placeholder"></div>
            </div>

            <div class="textb">رقم هاتف بديل
                <input type="text" required name="anotherphone" value="<?php echo $row['anotherphone']; ?>">
                <div class="placeholder"></div>
            </div>

            <center><button class="btnnew"  name="editpatient" type="submit">تعديل سجل المريض</button>
            
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
                    text: "تم تعديل سجل المريض بنجاح",
                    icon: "success",
                    button: "تم",
                    });
           
           <?php
        }else{
            ?>
            swal ( "لم تتم العملية" ,  "تعذر تعديل سجل المريض" ,  "error" );
            <?php
        }
      }
      ?>
    </script>
    </body>
</html>