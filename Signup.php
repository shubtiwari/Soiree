<?php
  include 'conn.php';
  if(isset($_POST['done']))
  {
      $username = $_POST['username'];
      $Email = $_POST['email'];
      $Mobile = $_POST['number'];
      $q = " INSERT INTO `signup`(`name`, `Email`, `Mobile`) VALUES ('$username','$Email','$Mobile')";
      $result = mysqli_query($con, $q);
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
<body>
<?php include 'style.css';?>
<?php include 'Navbar.php';?>
<div>
    <form action="#" style="border:1px solid #ccc" method = "post">
      <div class="container">
          <h1>Register</h1>
          <p> Please fill in this form to Register. </p>
          <hr>
          <label for="Name"><b>Name:</b></label>
          <input type="text" placeholder="Enter Name" name="username" required>

          <label for="email"><b>Email:</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="Number"><b>Mobile No:</b></label>
          <input type="text" placeholder="Enter Mobile Number" name="number" required>
        
            <div class="clearfix">
              <button type="reset" class="cancelbtn">Cancel</button>            
              <button type="submit" name ="done" class="signupbtn"> Register </button>
            </div>
           <script>
          

           </script> 
      </div>
    </form>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>


