<?php
include_once '../database/dbConn.php';
session_start();  //session carry data to the page             background: #fbfbfb;

$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$id = $_SESSION['id'];
$stud_num = $_SESSION['student_number'];
$gender = $_SESSION['gender'];
$email = $_SESSION['email'];
$campus = $_SESSION['stu_campus'];
     //   echo "<script>alert('$name');</script>";      <a href="view.php">Uploaded Jobs</a>

     if(isset($_GET['id']) && isset($_SESSION['id']))
    {
      $type = $_GET['type'];

      if ($type == "cancel")
            {
                $id_get = $_GET['id'];
                $sql = "DELETE FROM book_reservation WHERE br_id = '$id_get' AND br_student_id = '$id';";
                mysqli_query($conn,$sql);

                $_SESSION['message'] = "Trip Successfully Cancelled";
              $_SESSION['msg_type'] = "success";

              echo "<script>location.replace('view_reservations.php');</script>";
              exit();

      }

    }

  ?>
  <!DOCTYPE html>
  <head>
    <title>Student Account</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <link href="account/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="account/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="account/css/templatemo_style.css" rel="stylesheet" type="text/css">

      <link rel="shortcut icon" href="../img/TUT-Logo1.jpg" type="image/x-icon">

  </head>
  <body class="templatemo-bg-gray">
    <h1 class="margin-bottom-15">View Reservations</h1>
    <br>
    <div class="container">
      <div class="col-md-12">
        <div class="container-fluid padding">
          <?php

                       if (isset($_SESSION['message'])): ?>
                       <div class="alert alert-<?=$_SESSION['msg_type']?>">

                         <?php
                             echo $_SESSION['message'];
                             unset($_SESSION['message']);
                         ?>

                     </div>
                   <?php endif ?>
     </div>
        <br>

     <table class="table table-bordered">
    <thead>
      <tr>

        <th scope="col">Trip#</th>
      	<th scope="col">Trip</th>
        <th scope="col">Time</th>
        <th scope="col">Date of booking the trip</th>
        <th scope="col"></th>


      </tr>
    </thead>
    <tbody>
      <?php


      $sql="SELECT * FROM book_reservation WHERE br_student_id  ='$id'";
      $result=mysqli_query($conn,$sql);
      $numRows = mysqli_num_rows($result);
      $countTrips=0;

      if($numRows>0)
      {

      		while($row = mysqli_fetch_assoc($result))
      		{
            $countTrips=$countTrips+1;
            ?>
      		<tr>

            <td><?php echo $row['br_id']?></td>
      		<td><?php echo $row['br_start_and_destination']?></td>
          <th scope="row"><?php echo $row['br_time']?></th>
           <td><?php echo $row['br_date']?></td>
            <td> <a class='btn btn-danger' href='view_reservations.php?type=cancel&id=<?php echo $row['br_id']?>'>Cancel trip</a></td>

            </tr>
              <?php
          }
      }
      	else
      	{
      		echo "<td colspan='9'>No bookings found</td>";
      	}
     ?>
    </tbody>
  </table>
	</div>
  <div class="col-lg-3">
<div class="border bg-light rounded p-4">
          <h3 class="text-center"><?php echo "The  Number of Trips you have today is : ".  $countTrips; ?></h3>
</div>
</div>
<br>
</div>
<br>
<div class="col-lg-3">
<a class="btn btn-primary" href="s_interface.php"><i class="fa fa-home "></i> Home</a>
<a class="btn btn-infp" href="reserve.php"><i class="fa fa-home "></i> Add Trips</a>
</div>
<br>
<br>
      </div>
    </div>
    <script type="text/javascript" src="account/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="account/js/bootstrap.min.js"></script>
  </body>
  </html>
