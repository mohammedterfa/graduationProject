<?php 
    include "login.php";
    include_once "connection.php";
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
        <style>
            table{
    border-collapse: collapse;
    width: 98%;
    color: #588c7e;
    font-size: 18px;
    text-align: right;
}

th{
    background-color: #588c7e;
    color: white;
}
a{
    color: #588c7e;
}

tr:nth-child(even){background-color: #f2f2f2;}
        </style>
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
            <div class="dataTable">
                <table>
                    <tr>
                        <th>الهاتف البديل</th>
                        <th>الهاتف</th>
                        <th>الفحوصات</th>
                        <th>حساسية من الأدوية</th>
                        <th>الأدوية</th>
                        <th>المرض</th>
                        <th>فصيلة الدم</th>
                        <th>تاريخ الميلاد</th>
                        <th>العنوان</th>
                        <th>الجنسية</th>
                        <th>الجنس</th>
                        <th>الرقم التسلسلي</th>
                        <th>الاسم</th>
                    </tr>
                    <?php 
                        $id = $_SESSION['id'];
                        $sql = "select * from patient where id='$id'";
                        $result = $connect->query($sql);

                        if($result->num_rows > 0){
                            while ($row = $result-> fetch_assoc()){
                                echo "<tr><td>". $row['anotherphone'] ."</td><td>". $row['phone'] ."</td><td><a href="."../Files/". $row['labtest'] ." >". $row['labtest'] ."</a></td><td>". $row['allergy'] ."</td><td>". $row['medicine'] ."</td><td>". $row['disease'] ."</td><td>". $row['bloodtype'] ."</td><td>". $row['birthdate'] ."</td><td>". $row['address'] ."</td><td>". $row['nationality'] ."</td><td>". $row['gender'] ."</td><td>". $row['id'] ."</td><td>". $row['name'] ."</td></tr>";
                            }
                            echo "</table>";
                        }else{
                            echo "نتائج 0";
                        }
                        $connect->close();
                    ?>
                
            </div>
        </div>

     
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        document.querySelector(".right ul li").addEventListener("click",function(){
            this.classList.toggle("active");
        });
    </script>
    </body>
</html>