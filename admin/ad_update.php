<?php

include_once '../database/dbConn.php';
session_start();  //session carry data to the page             background: #fbfbfb;

               $name = $_SESSION['name'];
               $id = $_SESSION['id'];
              $staff_number = $_SESSION['staff_number'];
              $gender = $_SESSION['gender'];
              $email = $_SESSION['email'];
              $campus = $_SESSION['ad_campus'];


              $sql="select * from bus_admin where ad_id='$id' ;";
                 $results = mysqli_query($conn,$sql);
                 $row = mysqli_fetch_assoc($results);

                  $ad_name=$row['ad_name'];
                  $ad_surname=$row['ad_surname'];
                  $ad_number=$row['ad_staffno'];
                  $ad_email=$row['ad_email'];
                  $ad_gender=$row['ad_gender'];
                  $ad_campus=$row['ad_campus'];



     //   echo "<script>alert('$name');</script>";      <a href="view.php">Uploaded Jobs</a>
  ?>
  <!DOCTYPE html>
  <head>
    <title>Update Account</title>
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
    <h1 class="margin-bottom-15">Update Account</h1>
    <div class="container">
      <div class="col-md-12">
        <form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="ad_update.php" method="POST">
          <div class="form-inner">


            <div class="form-group">
                  <div class="col-md-6">
                    <label for="first_name" class="control-label">First Name(s)</label>
                    <input name="name" type="text" class="form-control" id="first_name" placeholder=""
                        value="<?php echo  $ad_name ?>"   required>
                  </div>
                  <div class="col-md-6">
                    <label for="last_name" class="control-label">Last Name</label>
                    <input name="surname" type="text" class="form-control" id="last_name" placeholder=""
                        value="<?php echo  $ad_surname ?>"   required>
                  </div>
                </div>


                <div class="form-group">

                  <div class="col-md-6">
                    <label for="last_name" class="control-label">Staff Number</label>
                    <input name="student_number" type="text" class="form-control" id="last_name" placeholder=""
                          value="<?php echo  $ad_number ?>"   required>
                  </div>
                      <div class="col-md-6">
                        <label for="username" class="control-label">Staff Email</label>
                       <input name="email" type="email" class="form-control" id="email" placeholder=""
                            value="<?php echo  $ad_email ?>"   required>
                        <small id="emailHelp" class="form-text text-muted">i.e 222222@tut4life.ac.za.</small>
                      </div>
                    </div>

                <div class="form-group">
                  <div class="col-md-6">
                    <label>Campus</label>

                   <select  name="campus" class="form-control"   required>
                       <option value="">Choose Campus</option>
                       <option value="Sosha South">Sosha South</option>
                       <option value="Sosha North">Sosha North</option>
                       <option value="Arcadia">Arcadia</option>
                        <option value="Pretoria">Pretoria</option>
                   </select>
                 </div>


                 <div class="col-md-6">
                   <label>Gender</label>

                  <select  name="gender" class="form-control"   required>
                      <option value="">Choose Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>

                  </select>
                </div>


                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <label for="password" class="control-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="" required>
                  </div>
                  <div class="col-md-6">
                    <label for="password" class="control-label">Confirm Password</label>
                    <input name="confirm_pass" type="password" class="form-control" id="password_confirm" placeholder="" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <label><input name="check" type="checkbox" required>I agree to the <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal" >Terms and Conditions</a>.</a></label>
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

                <div class="form-group">
                  <div class="col-md-12">
                    <input name="submit" type="submit" value="Update account" class="btn btn-info">



                  </div>
                </div>
                <br>
                 <a class="btn btn-success" href="a_interface.php"><i class="fa fa-home "></i> Home</a>
          </div>
            </form>
            <?php
    if (isset($_POST['submit']))
    {
  //    echo "<script>alert('logged');</script>";

      $name =$_POST['name'];
      $surname=$_POST['surname'];
      $student_number=$_POST['student_number'];
      $email=$_POST['email'];
      $campus=$_POST['campus'];
      $gender=$_POST['gender'];
      $password=$_POST['password'];
      $confirm=$_POST['confirm_pass'];

  //    echo "<script>alert('$name $surname   $student_number $email $campus $gender $password   $confirm');</script>";

            if(!preg_match("/^[a-zA-Z\s]+$/",$name))
              {
                $_SESSION['message'] = "Incorrect name format no numeric digits allowed or special characters";
                 $_SESSION['msg_type'] = "danger";

                  $_SESSION['name']=$name;
                  $_SESSION['surname']= $surname;
                  $_SESSION['email']=$email;
                  $_SESSION['student_number']=$student_number;

                echo "<script>location.replace('ad_update.php');</script>";
                 exit();
              }


              if(!preg_match("/^[a-zA-Z\s]+$/",$surname))
                {
                  $_SESSION['message'] = "Incorrect surname format no numeric digits allowed or special characters";
                   $_SESSION['msg_type'] = "danger";

                    $_SESSION['name']=$name;
                    $_SESSION['surname']= $surname;
                    $_SESSION['email']=$email;
                    $_SESSION['student_number']=$student_number;

                  echo "<script>location.replace('ad_update.php');</script>";
                   exit();
                }

                  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                  {
                    $_SESSION['message'] = "Incorrect email format";
                     $_SESSION['msg_type'] = "danger";

                      $_SESSION['name']=$name;
                      $_SESSION['surname']= $surname;
                      $_SESSION['email']=$email;
                      $_SESSION['student_number']=$student_number;

                    echo "<script>location.replace('ad_update.php');</script>";
                     exit();
                  }

                    if (!preg_match("/^[0-9]{9}+$/",$student_number))
                    {
                      $_SESSION['message'] = "No characters allowed only numeric digits ";
                       $_SESSION['msg_type'] = "danger";

                        $_SESSION['name']=$name;
                        $_SESSION['surname']= $surname;
                        $_SESSION['email']=$email;
                        $_SESSION['student_number']=$student_number;

                      echo "<script>location.replace('ad_update.php');</script>";
                       exit();
                    }
                    /*
                    create table student(
                    ad_id int(10) primary key auto_increment ,
                    ad_name text not null,
                    ad_surname text not null,
                    ad_number int(10) not null,
                    ad_email text not null,
                    ad_campus text not null,
                    ad_gender text not null,
                    ad_password text not null
                    );
                    */

                    if($password == $confirm)
                    {
                        $pass=password_hash($password,PASSWORD_DEFAULT);
                        $sql="UPDATE bus_admin
                        SET ad_name='$name',ad_surname='$surname',ad_staffno='$student_number'
                         ,ad_email='$email',ad_campus='$campus',ad_gender='$gender',ad_password='$pass'
                        WHERE ad_id='$id';";
                        $run=mysqli_query($conn,$sql);

                        echo "<script>alert('Profile Succcesfully updated');</script>";
                        echo "<script>location.replace('ad_view.php');</script>";
                         exit();
                    }
                    else {
                      $_SESSION['message'] = "Passwords do not match ";
                       $_SESSION['msg_type'] = "danger";

                        $_SESSION['name']=$name;
                        $_SESSION['surname']= $surname;
                        $_SESSION['email']=$email;
                        $_SESSION['student_number']=$student_number;


                      echo "<script>location.replace('ad_update.php');</script>";
                       exit();
                    }

    }

            ?>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="templatemo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Terms of Service</h4>
          </div>
          <div class="modal-body">
            <p>You Hereby confirm that the entered information is correct and should you enter fraudulent information TUT will take legal actions against you .</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="account/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="account/js/bootstrap.min.js"></script>
  </body>
  </html>
