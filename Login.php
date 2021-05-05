<?php
include 'conn.php';
if(isset($_POST['done']))
{
    $name =$_POST["name"];
    $password =$_POST["psw"];
    $query=" SELECT * FROM `login` WHERE name= '$name' AND password='$password'";
    $result= mysqli_query($con,$query);
    $num = mysqli_num_rows($result);
    if($num ==1){
      header("location:Dashboard.php");
    }
    else {
           echo '<script> alert("Incorrect Password") </script>';
         }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php include 'style.css' ;?>
<body>
<?php include 'Navbar.php';?>
<div>
<form action="#" style="border:1px solid #ccc" method="post">
  <div class="container">
      <h1>Login</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="Name"><b>Name:</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      <label for="psw"><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <div class="clearfix">
        <button type="submit" name="done">Login</button>
      </div>
  </div>
</form>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>

