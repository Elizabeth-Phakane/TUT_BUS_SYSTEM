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
  <head>
    <title>Admin Account</title>
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
    <h1 class="margin-bottom-15">View Student Bookings</h1>
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

      	<th scope="col">Trip</th>
        <th scope="col">Time</th>
        <th scope="col">Date of booking the trip</th>
        <th scope="col">Total Number of students</th>


      </tr>
    </thead>
    <tbody>
    <?php

    $sql="SELECT br_id, br_start_and_destination,br_time,br_date, COUNT(*) AS 'tot_trips'
  FROM book_reservation
  GROUP BY br_start_and_destination,br_time
  ORDER BY br_time ASC;";
    $result=mysqli_query($conn,$sql);
    $numRows = mysqli_num_rows($result);


    if($numRows>0)
    {

    		while($row = mysqli_fetch_assoc($result))
    		{
        $trip=$row['br_start_and_destination'];
        $time= $row['br_time'];
        $countTrips=$row['tot_trips'];
        $date=$row['br_date'];
        echo "<tr>
        <td>$trip</td>
       <td>$time</td>
      <td>$date</td>
      <td>$countTrips</td>";
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
</div>
<br>
<div class="col-lg-3">
<a class="btn btn-primary" href="a_interface.php"><i class="fa fa-home "></i> Home</a>
</div>
<br>
<br>
      </div>
    </div>
    <script type="text/javascript" src="account/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="account/js/bootstrap.min.js"></script>
  </body>
  </html>
