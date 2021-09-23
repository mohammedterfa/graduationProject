<?php 
session_start();

if(!isset($_SESSION['loginUser'])){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="admin-navbar">
            <div class="left">
                <ul>
                <li><a href="#"><i class="fas fa-home"></i></a></li>
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
    
    <div class="main-body">
    <div class="main-buttoms">
        <div class="buttom4"><a href="">
        <p><i class="fas fa-newspaper"></i></p>
        <p>تقاير مفصلة عن المستشفى</p></a>
        </div>


        <div class="buttom5"><a href="addNewAdmin.php">
        <p><i class="fas fa-hospital-user"></i></p>
        <p>استقبال مريض في المستشفى</p></a>
        </div>

        
        <div class="buttom"><a href="selectNewHospital.php">
        <p><i class="fas fa-random"></i></p>
        <p>تحويل مريض لمستشفى آخر</p></a>
        </div>


        <div class="buttom"><a href="findpatienttoview.php">
        <p><i class="fas fa-edit"></i></p>
        <p>عرض او تعديل او حذف بيانات مريض</p></a>
        </div>

        <div class="buttom2"><a href="addNewPetientRecord.php">
        <p><i class="fas fa-poll"></i></p>
        <p>اضافة سجل مريض جديد</p></a>
        </div>

        
    </div>
    
    </div>
    <script>
        document.querySelector(".right ul li").addEventListener("click",function(){
            this.classList.toggle("active");
        });
    </script>
</body>
</html>
