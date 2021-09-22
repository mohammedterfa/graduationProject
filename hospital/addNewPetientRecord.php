<?php 
    include "login.php";
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
                    <p><?php  echo $_SESSION['loginUser'];?><br><span>Hospital</span></p>
                    <img src="../img/profile.png" width="40">
                    <i class="fas fa-angle-down"></i>
                </a>
                <div class="dropdown">
                    <ul>
                    <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
                    <li><a href="#"><i class="fas fa-sliders-h"></i>Setting</a></li>
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>تسجيل خروج</a></li>
                    </ul>
                </div>
                </li>
                </ul>
            </div>
        </div>
    </div>

        <center>
        <div class="formStyle">
        <form action="insertHospital.php" method="post" class="login-form">
            <h1>إضــافة سجل مريض جديد</h1>

            <div class="textb">
                <input type="text" required name="hospitalname">
                <div class="placeholder">اسم المريض كامل</div>
            </div>
            <div class="textb">
                <input type="text" required name="hospitalid">
                <div class="placeholder">الرقم التسلسلي للسجل المرضي</div>
            </div>

            <div class="select" >
                <select name="state">
                <option value="">الجنس</option>
                <option value="ذكر">ذكر</option>
                <option value="أنثى">أنثى</option>               
                </select >        
               
            </div>
            <div class="select" >
                <select name="state">
                <option value="">الجنسية</option>
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

            <div class="textField">
                <input type="text"  required name="address">
                <div class="placeholder">عنوان سكن المريض</div>
            </div>

            <div class="textField">
                <input type="date"  required name="address">
                <div class="placeholder">تاريخ الميلاد</div>
            </div>
            
            <div class="select" >
                <select name="state">
                <option value="">فصيلة الدم</option>
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

            <div class="textb">
                <input type="text" required name="phone">
                <div class="placeholder">المرض/ الأمراض</div>
            </div>

            <div class="textb">
                <input type="text" required name="phone">
                <div class="placeholder">الدواء / الأدوية</div>
            </div>

            <div class="textb">
                <input type="text" required name="phone">
                <div class="placeholder">الأدوية التي تسبب حساسية للمريض أو الممنوعة</div>
            </div>

            <div class="textb">
                <input type="file" required name="phone">
                <div class="placeholder">(pdf)نتائج الاختبارات المعملية</div>
            </div>
            
            <div class="textb">
                <input type="text" required name="phone">
                <div class="placeholder">رقم هاتف المريض</div>
            </div>

            <div class="textb">
                <input type="text" required name="phone">
                <div class="placeholder">رقم هاتف بديل</div>
            </div>

            <center><button class="btnnew"  name="addnewhospital" type="submit">إضافة مستشفى جديدة</button>
            
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
    </body>
</html>