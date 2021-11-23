<?php
 include_once '../database/dbConn.php';
 session_start();  //session carry data to the page             background: #fbfbfb;
 $name = $_SESSION['name'];
 $id = $_SESSION['id'];
$staff_number = $_SESSION['staff_number'];
$gender = $_SESSION['gender'];
$email = $_SESSION['email'];
$campus = $_SESSION['ad_campus'];
?>

<!DOCTYPE html>
<head>
	<title>Create Admin Account</title>
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
	<h1 class="margin-bottom-15">Create Bus Admin Account</h1>
	<div class="container">
		<div class="col-md-12">
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="admin_signup.php" method="post">
				<div class="form-inner">


        	<div class="form-group">
			          <div class="col-md-6">
			            <label for="first_name" class="control-label">First Name(s)</label>
			            <input name="1name" type="text" class="form-control" id="first_name"  placeholder=""
									value="<?php
                  if (!empty($_SESSION['1name'])) {
                        echo $_SESSION['1name'];
                         unset($_SESSION['1name']);
                  }
              ?>"
									>
			          </div>
			          <div class="col-md-6">
			            <label for="last_name" class="control-label">Last Name</label>
			            <input name="1surname" type="text" class="form-control" id="last_name" placeholder=""
									value="<?php
                  if (!empty($_SESSION['1surname'])) {
                        echo $_SESSION['1surname'];
                         unset($_SESSION['1surname']);
                  }
              ?>">
			          </div>
			        </div>


              <div class="form-group">

                <div class="col-md-6">
                  <label for="last_name" class="control-label">Staff Number</label>
                  <input name="1staffnum" type="text" class="form-control" id="last_name" placeholder=""
									value="<?php
                  if (!empty($_SESSION['1staffnum'])) {
                        echo $_SESSION['1staffnum'];
                         unset($_SESSION['1staffnum']);
                  }
              ?>">
                </div>

								<div class="col-md-6">
									<label for="last_name" class="control-label">Staff Email</label>
									<input name="1email" type="text" class="form-control" id="last_name" placeholder=""
									value="<?php
									if (!empty($_SESSION['1email'])) {
												echo $_SESSION['1email'];
												 unset($_SESSION['1email']);
									}
							?>"
									>
									 <small id="emailHelp" class="form-text text-muted">example@tut4life.ac.za.</small>
								</div>
                  </div>


			        <div class="form-group">
			          <div class="col-md-6">
                  <label>Campus</label>

                 <select  name="1campus" class="form-control"  required >
                     <option value="">Choose Campus</option>
                     <option value="Sosha South">Sosha South</option>
                     <option value="Sosha North">Sosha North</option>
										 <option value="Arcadia">Arcadia</option>
											<option value="Pretoria">Pretoria</option>
                 </select>
               </div>
							 <div class="col-md-6 templatemo-radio-group">
						 		<label class="radio-inline">
						 			<input type="radio" name="1gender" id="optionsRadios1" value="male"> Male
						 		</label>
						 		<label class="radio-inline">
						 			<input type="radio" name="1gender" id="optionsRadios2" value="female"> Female
						 		</label>
						 	</div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="password" class="control-label">Password</label>
			            <input name="1password" type="password" class="form-control" id="password" placeholder="">
			          </div>
			          <div class="col-md-6">
			            <label for="password" class="control-label">Confirm Password</label>
			            <input name="1confirm_pass" type="password" class="form-control" id="password_confirm" placeholder="">
			          </div>
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <label><input name="check" type="checkbox" required>I agree to the <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal">Terms and Conditions</a>.</a></label>
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
			            <input name="submit" type="submit" value="Create account" class="btn btn-info">

			          </div>

			        </div>
							<br>
							 <a class="btn btn-success" href="a_interface.php"><i class="fa fa-home "></i> Home</a>
				</div>
		      </form>
					<?php
          if (isset($_POST['submit']))
          {
          //  echo "<script>alert('Alrighty');</script>";
					$name =$_POST['1name'];
					$surname=$_POST['1surname'];
					$staffnum=$_POST['1staffnum'];
					$email=$_POST['1email'];
					$campus=$_POST['1campus'];
					$gender=$_POST['1gender'];
					$password=$_POST['1password'];
					$confirm=$_POST['1confirm_pass'];

					$sql_email="select * from  bus_admin where ad_email='$email' or ad_staffno='$staffnum';";
					$sql_res=mysqli_query($conn,$sql_email) or die(mysqli_error($conn));
					if(mysqli_num_rows($sql_res)>0)
					{

									 $_SESSION['message'] = "Account exists";
										$_SESSION['msg_type'] = "danger";
										 echo "<script>location.replace('admin_signUp.php');</script>";
										exit();

					}
					else
					{
						if(!preg_match("/^[a-zA-Z\s]+$/",$name))
							{
								$_SESSION['message'] = "Incorrect name format";
								 $_SESSION['msg_type'] = "danger";

									$_SESSION['1name']=$name;
									$_SESSION['1surname']= $surname;
									$_SESSION['1email']=$email;
									$_SESSION['1staffnum']=$staffnum;

								echo "<script>location.replace('admin_signup.php');</script>";
								 exit();
							}


							if(!preg_match("/^[a-zA-Z\s]+$/",$surname))
								{
									$_SESSION['message'] = "Incorrect surname format";
									 $_SESSION['msg_type'] = "danger";

										$_SESSION['1name']=$name;
										$_SESSION['1surname']= $surname;
										$_SESSION['1email']=$email;
										$_SESSION['1staffnum']=$staffnum;

									echo "<script>location.replace('admin_signup.php');</script>";
									 exit();
								}

									if (!filter_var($email, FILTER_VALIDATE_EMAIL))
									{
										$_SESSION['message'] = "Incorrect email format";
										 $_SESSION['msg_type'] = "danger";

											$_SESSION['1name']=$name;
											$_SESSION['1surname']= $surname;
											$_SESSION['1email']=$email;
											$_SESSION['1staffnum']=$staffnum;

										echo "<script>location.replace('admin_signup.php');</script>";
										 exit();
									}

										if (!preg_match("/^[0-9]+$/",$staffnum))
										{
											$_SESSION['message'] = "No characters allowed only numeric digits ";
											 $_SESSION['msg_type'] = "danger";

												$_SESSION['1name']=$name;
												$_SESSION['1surname']= $surname;
												$_SESSION['1email']=$email;
												$_SESSION['1staffnum']=$staffnum;

											echo "<script>location.replace('admin_signup.php');</script>";
											 exit();
										}


									if($password == $confirm)
									{
											$pass=password_hash($password,PASSWORD_DEFAULT);
											$sql="INSERT INTO bus_admin(ad_name,ad_surname,ad_staffno,ad_email,ad_campus,ad_gender,ad_password)
											VALUES('$name','$surname','$staffnum','$email','$campus','$gender','$pass');";
											$run=mysqli_query($conn,$sql);

											echo "<script>alert('Student $name Succcesfully registered');</script>";
											echo "<script>location.replace('a_interface.php');</script>";
											 exit();
									}
									else {
										$_SESSION['message'] = "Passwords do not match ";
										 $_SESSION['msg_type'] = "danger";

											$_SESSION['1name']=$name;
											$_SESSION['1surname']= $surname;
											$_SESSION['1email']=$email;
											$_SESSION['1staffnum']=$staffnum;


										echo "<script>location.replace('admin_signup.php');</script>";
										 exit();
									}

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
