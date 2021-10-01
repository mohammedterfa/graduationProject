<?php 
session_start();
require_once "connection.php";

if(isset($_POST["selecthospital"])){
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
        <form action="transferedhospital.php" method="post" class="login-form">
            <h1>اختار المستشفى المراد التحويل لها</h1>
            <div class="select" >
                <select name="toHos" required>
                <option value="">إختار مستشفى</option>
                <?php
                $hosname = $_SESSION['loginUser'];
                $query = "select * from hospital where not username='$hosname'";
                mysqli_set_charset($connect,'utf8');
                $result = mysqli_query($connect,$query);
                while($row = mysqli_fetch_array($result)){ ?>
                <option value="<?php echo $row[1]; ?>"><?php echo $row[0]; ?></option>
                <?php } ?>
                </select >        
               
            </div>

            <center><button class="btnnew"  name="transferedhospital" type="submit">التالــــي    <i class="fas fa-arrow-circle-right"></i></button>
            <center><a href="viewnametransfer.php"><button class="btnnew"  name="" type="button"><i class="fas fa-arrow-circle-left"></i> رجــــوع  </button> </a>
            
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
    <?php
}
    

?>