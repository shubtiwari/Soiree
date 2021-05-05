<?php
include 'conn.php';
$mobile =$_GET['Mobile'];

$sql = "INSERT INTO confirm SELECT * FROM signup WHERE Mobile = $mobile;";
$sql .= "DELETE FROM signup WHERE Mobile = $mobile;";
if ($con->multi_query($sql) === TRUE) {

} 
header("location:dashboard.php");
//$sql ="INSERT INTO rejected SELECT * FROM signup WHERE ID = $stu_id"; 
// $sql2="DELETE FROM signup WHERE ID = $stu_id";
//$result = mysqli_query($con,$sql);
//header("location:dashboard.php");
?>