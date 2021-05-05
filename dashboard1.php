<?php
    include 'conn.php';
    $mobile =$_GET['Mobile'];
    $sql = "INSERT INTO rejected SELECT * FROM signup WHERE Mobile = $mobile;";
    $sql .= "DELETE FROM signup WHERE Mobile = $mobile;";
    if ($con->multi_query($sql) === TRUE) {
    } 
        header("location:dashboard.php");
?>