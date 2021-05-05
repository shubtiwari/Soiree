<?php
 include 'conn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Landing Page</title> 
    <?php include 'style.css' ;?>
</head> 

<body> 
      <div>
          <?php include 'Navbar2.php';?>
      </div>
  <div class="container">
    <br> <br>
    <h1 style="text-align:center">Dashboard </h1>
     <h2> Confirm </h2>
      <hr> 
        <table class="table">
          <thead>
            <tr>
              <th scope="col">S.No</th>
              <th scope="col">Name </th>
              <th scope="col">E-mail</th>
              <th scope="col">Mobile</th>
              <th scope="col">Send Invitation</th>
              <th scope="col">Delete</th>
            </tr>
           </thead>
              <?php
                    $q = " SELECT * FROM `Confirm` ";
                    $result = mysqli_query($con, $q);
                    $counter =0;
                    while($row = mysqli_fetch_assoc($result)){
              ?>
              <tbody>
                  <tr>
                  <th scope="row"><?php echo ++$counter; ?> </th>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['Mobile'] ?></td>
                    <td><a href="mail.php?Email=<?php echo $row['Email'];?>" class="btn btn-success " role="button" >Invite</a></td>
                    <td><a href="Delete.php?Mobile=<?php echo $row['Mobile'];?>" class="btn btn-danger" role="button" >Delete</a></td>
                  </tr>
               </tbody>
                  <?php } ?>
          </table>
   </div>
  
<br> <br>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>