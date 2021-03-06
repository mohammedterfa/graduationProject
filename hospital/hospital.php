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
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>?????????? ????????</a></li>
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
        <p>?????????? ?????????? ???? ????????????????</p></a>
        </div>


        <div class="buttom5"><a href="patientReception.php">
        <p><i class="fas fa-hospital-user"></i></p>
        <p>?????????????? ???????? ???? ????????????????</p></a>
        </div>

        
        <div class="buttom"><a href="transfer.php">
        <p><i class="fas fa-random"></i></p>
        <p>?????????? ???????? ?????????????? ??????</p></a>
        </div>


        <div class="buttom"><a href="findpatienttoview.php">
        <p><i class="fas fa-edit"></i></p>
        <p>?????? ???? ?????????? ???? ?????? ???????????? ????????</p></a>
        </div>

        <div class="buttom2"><a href="addNewPetientRecord.php">
        <p><i class="fas fa-poll"></i></p>
        <p>?????????? ?????? ???????? ????????</p></a>
        </div>

        
    </div>
    
    </div>
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
                    title: "?????? ??????????????",
                    text: "???? ?????????????? ???????????? ??????????",
                    icon: "success",
                    button: "????",
                    });
           
           <?php
        }else{
            ?>
            swal ( "???? ?????? ??????????????" ,  "???????? ?????????????? ????????????" ,  "error" );
            <?php
        }
      }
      ?>
    </script>
</body>
</html>
