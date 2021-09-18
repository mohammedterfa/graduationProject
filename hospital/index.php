<?php 

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
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <form action="login.php" method="post" class="login-form">
            <h1>تسجيل الدخول</h1>
            <center><p>للمستشفيات</p><br>

            <div class="textb">
                <input type="text" required name="username">
                <div class="placeholder">إسم المستخدم</div>
            </div>

            <div class="textb">
                <input type="password" required name="password">
                <div class="placeholder">كلمة المرور</div>
                <div class="show-password fas fa-eye-slash"></div>
            </div>
            <p style="color:red; margin-top:40px;"> 
            <?php 
                if(isset($_GET['message'])){
                    if($_GET['message'] == "InvalidUserNameandPassword"){
                        echo "خطأ في اسم المستخدم أو كلمة المرور";
                }}
            ?>
            </p>

            <button class="btn fas fa-arrow-right" disabled name="login_btn" type="submit"></button>
            
        </form>
        
        <script>
            var fields = document.querySelectorAll(".textb input");
            var btn = document.querySelector(".btn");
            function check(){
                if(fields[0].value != "" && fields[1].value !="")
                    btn.disabled = false;
                else
                    btn.disabled = true;
            }

            fields[0].addEventListener("keyup",check);
            fields[1].addEventListener("keyup",check);

            document.querySelector(".show-password").addEventListener("click",function(){
                if(this.classList[2] == "fa-eye-slash"){
                    this.classList.remove("fa-eye-slash");
                    this.classList.add("fa-eye");
                    fields[1].type = "text";
                }else{
                    this.classList.remove("fa-eye");
                    this.classList.add("fa-eye-slash");
                    fields[1].type = "password";
                }
            });
        </script>
    </body>
</html>