<?php
    include 'conn.php';
    $mobile =$_GET['Mobile'];
    $sql ="DELETE FROM rejected WHERE Mobile = $mobile";
    $result = mysqli_query($con,$sql);
    header("location:rejected.php");
?>