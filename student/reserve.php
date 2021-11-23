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



$sql="select * from student where stu_id='$id' ;";
  $results = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($results);

   $stu_name=$row['stu_name'];
   $stu_surname=$row['stu_surname'];
   $stu_number=$row['stu_number'];
   $stu_email=$row['stu_email'];
   $stu_gender=$row['stu_gender'];
   $stu_campus=$row['stu_campus'];



     //   echo "<script>alert('$name');</script>";      <a href="view.php">Uploaded Jobs</a>
  ?>
  <!DOCTYPE html>
  <head>
  	<title>Book a Trip</title>
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
  	<h1 class="margin-bottom-15">Book bus reservation</h1>
  	<div class="container">
  		<div class="col-md-12">
  			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="reserve.php" method="POST">
  				<div class="form-inner">


          	<div class="form-group">
  			          <div class="col-md-6">
  			            <label for="first_name" class="control-label">First Name(s)</label>
  			            <input name="name" type="text" class="form-control" id="first_name" placeholder=""
                    readonly       value="<?php echo  $stu_name ?>"   required>

                    <input name="ID" type="hidden" class="form-control" id="email" placeholder=""
                       readonly    value="<?php echo  $id ?>"   required>
  			          </div>
  			          <div class="col-md-6">
  			            <label for="last_name" class="control-label">Last Name</label>
  			            <input name="surname" type="text" class="form-control" id="last_name" placeholder=""
                  readonly         value="<?php echo  $stu_surname ?>"   required>
  			          </div>
  			        </div>


                <div class="form-group">
                  <div class="col-md-6">
                    <label for="last_name" class="control-label">Student Number</label>
                    <input name="student_number" type="text" class="form-control" id="last_name" placeholder=""
                      readonly    value="<?php echo  $stu_number ?>"   required>
                  </div>
                      <div class="col-md-6">
                        <label for="username" class="control-label">Student Email</label>
                       <input name="email" type="email" class="form-control" id="email" placeholder=""
                          readonly     value="<?php echo  $stu_email ?>"   required>
                      </div>

                    </div>

  			        <div class="form-group">
  			          <div class="col-md-6">
                    <label>From</label>

                   <select  name="Start" class="form-control"   required>
                       <option value=""></option>
                       <option value="Sosha South Campus">Sosha South Campus</option>
                       <option value="Sosha North Campus">Sosha North Campus</option>

                       <option value="Arcadia Campus">Arcadia Campus</option>
                        <option value="Pretoria Campus">Pretoria Campus</option>
                   </select>
                 </div>

                 <div class="col-md-6">
                   <label>Destination</label>

                  <select  name="Destination" class="form-control"   required>
                      <option value=""> </option>
                      <option value="Sosha South Campus">Sosha South Campus</option>
                      <option value="Sosha North Campus">Sosha North Campus</option>

                      <option value="Arcadia Campus">Arcadia Campus</option>
                       <option value="Pretoria Campus">Pretoria Campus</option>
                  </select>
                </div>
  			        </div>




  			        <div class="form-group">
  			          <div class="col-md-6">
                    <label>Time</label>

                   <select  name="time" class="form-control"   required>
                       <option value=""></option>
                       <option value="07:00">07:00</option>
                                    <option value="07:30">07:30</option>
                                    <option value="08:00">08:00</option>
                                    <option value="08:30">08:30</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:30">09:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:30">17:30</option>
                                    <option value="18:00">18:00</option>
                                    <option value="18:30">18:30</option>
                                    <option value="19:00">19:00</option>
                                    <option value="19:30">19:30</option>
                                    <option value="20:00">20:00</option>
                                    <option value="20:30">20:30</option>
                   </select>
                 </div>
  			        </div>

                <br>
                 <?php

                       if (isset($_SESSION['message'])): ?>
                       <div class="alert alert-<?=$_SESSION['msg_type']?>">

                         <?php
                             echo $_SESSION['message'];
                             unset($_SESSION['message']);
                         ?>
                     </div>
                   <?php endif ?>
                   <br>
  			        <div class="form-group">
  			          <div class="col-md-12">
  			            <input name="submit" type="submit" value="Book reservation" class="btn btn-danger">

  			          </div>
  			        </div>
                <br>
                 <a class="btn btn-success" href="s_interface.php"><i class="fa fa-home "></i> Home</a>
                 <a class="btn btn-info" href="view_reservations.php"><i class="fa fa-home "></i> View Reservation</a>
  				</div>
  		      </form>
            <?php
    if (isset($_POST['submit']))
{
  //    echo "<script>alert('logged');</script>";

      $ID_Num =$_POST['ID'];
      $name =$_POST['name'];
      $surname=$_POST['surname'];
      $student_number=$_POST['student_number'];
      $email=$_POST['email'];
      $startPoint=$_POST['Start'];
      $destination=$_POST['Destination'];
      $time=$_POST['time'];
    //  $date=date();
  //    echo "<script>alert('$name $surname   $student_number $email $campus $gender $password   $confirm');</script>";
      if($time >= "07:00" && $time<"21:30")
      {
        if($startPoint != $destination)
       {
         $student_trip=  $startPoint." To ".$destination;
         $sql=" select * from  book_reservation where br_student_id ='$ID_Num' AND br_time='$time';";
        $results=mysqli_query($conn,$sql);
        $number_of_rows=mysqli_num_rows($results);

        if($number_of_rows>0)
          {
            $_SESSION['message'] = "Trip already booked for $time.";
            $_SESSION['msg_type'] = "danger";
           echo "<script>location.replace('reserve.php');</script>";
           exit();
          }
          else
          {
            //Arcadia to North Campus
            if (substr($time,-2) =="30"&& $startPoint == "Arcadia Campus" &&  $destination=="Sosha North Campus")
              {
                $_SESSION['message'] = "Long distance are booked hourly i.e 16:00,15:00";
                $_SESSION['msg_type'] = "danger";
           echo "<script>location.replace('reserve.php');</script>";
               exit();
              }
              //Sosha North To Arcadia
              elseif(substr($time,-2) =="30"&& $startPoint == "Sosha North Campus"&&  $destination=="Arcadia Campus")
              {
                $_SESSION['message'] = "Long distance are booked hourly i.e 16:00,15:00";
                $_SESSION['msg_type'] = "danger";
               echo "<script>location.replace('reserve.php');</script>";
               exit();
              }
              //Arcadia To South
              if (substr($time,-2) =="30"&& $startPoint == "Arcadia Campus"&&  $destination=="Sosha South Campus")
                {
                  $_SESSION['message'] = "Long distance are booked hourly i.e 16:00,15:00";
                  $_SESSION['msg_type'] = "danger";
                 echo "<script>location.replace('reserve.php');</script>";
                 exit();
                }
                //South To Arcadia
                if (substr($time,-2) =="30"&& $startPoint == "Sosha South Campus"&&  $destination=="Arcadia Campus")
                  {
                    $_SESSION['message'] = "Long distance are booked hourly i.e 16:00,15:00";
                    $_SESSION['msg_type'] = "danger";
                   echo "<script>location.replace('reserve.php');</script>";
                   exit();
                  }
                    //Pretoria To North
                    if (substr($time,-2) =="30"&& $startPoint == "Pretoria Campus"&&  $destination=="Sosha North Campus")
                 {
                   {
                   $_SESSION['message'] = "Long distance are booked hourly i.e 16:00,15:00";
                  $_SESSION['msg_type'] = "danger";
                 echo "<script>location.replace('reserve.php');</script>";
                 exit();
                    }
               }


     if (substr($time,-2) =="30"&& $startPoint == "Sosha North Campus"&&  $destination=="Pretoria Campus")
     {
       {
        $_SESSION['message'] = "Long distance are booked hourly i.e 16:00,15:00";
        $_SESSION['msg_type'] = "danger";
       echo "<script>location.replace('reserve.php');</script>";
       exit();
       }
    }

//Pretoria To South
        if (substr($time,-2) =="30"&& $startPoint == "Pretoria Campus"&&  $destination=="Sosha South Campus")
        {
            {
              $_SESSION['message'] = "Long distance are booked hourly i.e 16:00,15:00";
              $_SESSION['msg_type'] = "danger";
              echo "<script>location.replace('reserve.php');</script>";
              exit();
            }
        }

        if (substr($time,-2) =="30"&& $startPoint == "Sosha South Campus"&&  $destination=="Pretoria Campus")
        {
            {
              $_SESSION['message'] = "Long distance are booked hourly i.e 16:00,15:00";
              $_SESSION['msg_type'] = "danger";
              echo "<script>location.replace('reserve.php');</script>";
              exit();
            }
        }
          //database
           $date=date('d/m/Y ');
           $sql="INSERT INTO book_reservation(br_student_surname,br_student_id,br_student_number,br_start_and_destination,br_time,br_date)
            VALUES('$surname','$ID_Num','$student_number','$student_trip','$time',' $date');";
            $run=mysqli_query($conn,$sql);

            $_SESSION['message'] = "You have Succcesfully booked a trip $student_trip ";
             $_SESSION['msg_type'] = "info";
            echo "<script>location.replace('reserve.php');</script>";
             exit();
    }
  }
  else {
       $_SESSION['message'] = "You cannot book a trip from the same location to the same location i.e $startPoint To $destination ";
          $_SESSION['msg_type'] = "danger";
        echo "<script>location.replace('reserve.php');</script>";
         exit();
       }


}

}

            ?>
  		</div>
  	</div>
  	<script type="text/javascript" src="account/js/jquery-1.11.1.min.js"></script>
  	<script type="text/javascript" src="account/js/bootstrap.min.js"></script>
  </body>
  </html>
