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
  	<title>View Account</title>
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
  	<h1 class="margin-bottom-15">View Student Account</h1>
  	<div class="container">
  		<div class="col-md-12">
  			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="student_signup.php" method="POST">
  				<div class="form-inner">


          	<div class="form-group">
  			          <div class="col-md-6">
  			            <label for="first_name" class="control-label">First Name(s)</label>
  			            <input name="name" type="text" class="form-control" id="first_name" placeholder=""
                readonly    value="<?php
                      echo $stu_name;
                ?>">
  			          </div>
  			          <div class="col-md-6">
  			            <label for="last_name" class="control-label">Last Name</label>
  			            <input name="surname" type="text" class="form-control" id="last_name" placeholder=""
                readonly    value="<?php
                      echo $stu_surname;
                ?>">
  			          </div>
  			        </div>


                <div class="form-group">
                  <div class="col-md-6">
                    <label for="last_name" class="control-label">Student Number</label>
                    <input name="studnum" type="text" class="form-control" id="last_name" placeholder=""
                readonly    value="<?php
                      echo $stu_number;
                ?>">
                  </div>
                      <div class="col-md-6">
                        <label for="username" class="control-label">Student Email</label>
                       <input name="email" type="email" class="form-control" id="email" placeholder=""
                  readonly     value="<?php
                         echo $stu_email;
                   ?>">

                      </div>

                    </div>


                    <div class="form-group">
                          <div class="col-md-6">
                            <label for="first_name" class="control-label">Campus</label>
                            <input name="name" type="text" class="form-control" id="first_name" placeholder=""
                          readonly  value="<?php
                              echo $stu_campus;

                        ?>">
                          </div>
                          <div class="col-md-6">
                            <label for="last_name" class="control-label">Gender</label>
                            <input name="surname" type="text" class="form-control" id="last_name" placeholder=""
                          readonly  value="<?php
                              echo $stu_gender;
                        ?>">
                          </div>
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
  			        <!--    <input name="submit" type="submit" value="Done" class="btn btn-info">-->
                       <a class="btn btn-danger" href="s_interface.php"><i class="fa fa-home "></i> Done</a>
                       <a class="btn btn-primary" href="update.php"><i class="fa fa-home "></i>Update</a>
  			          </div>
  			        </div>

                 <a class="btn btn-success" href="s_interface.php"><i class="fa fa-home "></i> Home</a>
  				</div>
  		      </form>
  		</div>
  	</div>
  	<script type="text/javascript" src="account/js/jquery-1.11.1.min.js"></script>
  	<script type="text/javascript" src="account/js/bootstrap.min.js"></script>
  </body>
  </html>
