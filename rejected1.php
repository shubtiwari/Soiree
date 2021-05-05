<?php
    include 'conn.php';
    $mobile =$_GET['Mobile'];
    $sql = "INSERT INTO signup SELECT * FROM rejected WHERE Mobile = $mobile;";
    $sql .= "DELETE FROM rejected WHERE Mobile = $mobile;";
    if ($con->multi_query($sql) === TRUE) {
    } 
    header("location:rejected.php");
?>