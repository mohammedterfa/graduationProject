<?php
$connect = mysqli_connect("localhost","root","","cloud_hospital");
mysqli_set_charset($connect, 'utf8');
if(!$connect){
    echo "فشـــل الاتصال";
}

?>