<?php

include_once '../database/dbConn.php';
session_start();  //session carry data to the page             background: #fbfbfb;

               $name = $_SESSION['name'];
               $id = $_SESSION['id'];
              $staff_number = $_SESSION['staff_number'];
              $gender = $_SESSION['gender'];
              $email = $_SESSION['email'];
              $campus = $_SESSION['ad_campus'];


     //   echo "<script>alert('$name');</script>";      <a href="view.php">Uploaded Jobs</a>
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/TUT-Logo1.jpg" type="image/x-icon">
    <title>Admin Account</title>
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#"><?php echo "Hi "; echo $name; ?></a>
          </div>
      <ul>
<li><a href="ad_view.php">View Profile</a></li>
<li> <a href="ad_update.php">Update Profile</a></li>
<li><a href="admin_signup.php">Add Admin</a></li>
<li> <a href="reservations.php">View Bus Reservations </a></li>
     <li><a href="logout.php">logout</a></li>
      </ul>
  </div>
  </nav>
  <div class="img"></div>

</body>
</html>
