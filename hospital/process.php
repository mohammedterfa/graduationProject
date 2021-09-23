<?php
include_once "connection.php";
if(isset($_POST['select'])){
    header("location:view.php");
}
if(isset($_POST['edit'])){
    header("location:edit.php");
}
if(isset($_POST['delete'])){
    header("location:delete.php");
}
?>