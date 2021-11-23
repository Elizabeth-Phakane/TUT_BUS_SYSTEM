<?php

include_once '../database/dbConn.php';
session_start();  //session carry data to the page             background: #fbfbfb;

               $name = $_SESSION['name'];
               $id = $_SESSION['id'];
              $stud_num = $_SESSION['student_number'];
              $gender = $_SESSION['gender'];
              $email = $_SESSION['email'];
              $campus = $_SESSION['stu_campus'];


     //   echo "<script>alert('$name');</script>";      <a href="view.php">Uploaded Jobs</a>
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/TUT-Logo1.jpg" type="image/x-icon">
    <title>Student Account</title>
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
<li><a href="view.php">View Profile</a></li>
<li> <a href="update.php">Update Profile</a></li>
<li><a href="reserve.php">Reserve Bus Seat</a></li>
<li> <a href="view_reservations.php">View Booking</a></li>
     <li><a href="logout.php">logout</a></li>
      </ul>
  </div>
  </nav>
  <div class="img"></div>

</body>
</html>
