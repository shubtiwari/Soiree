<?php
    include 'conn.php';
    $mobile =$_GET['Mobile'];
    $sql ="DELETE FROM confirm WHERE Mobile = $mobile";
    $result = mysqli_query($con,$sql);
    header("location:confirm.php");
?>