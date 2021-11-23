<?php
 include_once '../database/dbConn.php';
 session_start();  //session carry data to the page             background: #fbfbfb;
?>

<!DOCTYPE html>

 <html lang="en" class="no-js">
    <head>

	<title>Student Account</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
	<link href="account/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="account/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="account/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="account/css/style.css" rel="stylesheet" type="text/css">

	  <link rel="shortcut icon" href="../img/TUT-Logo1.jpg" type="image/x-icon">
</head>


<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">Student SignIn</h1>
			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="student_signin.php" method="post" enctype="multipart/form-data">
		        <div class="form-group">
		          <div class="col-xs-12">
		            <div class="control-wrapper">
		            	<label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>
		            	<input name="student_number" type="text" class="form-control" id="username" placeholder="Username"
                value="<?php
          if (!empty($_SESSION['student_number'])) {
                echo $_SESSION['student_number'];
                unset($_SESSION['student_number']);
          }
        ?>"required>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
		            </div>
                <br>
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
		          </div>
		        </div>

		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input name="submit" type="submit" value="Log in" class="btn btn-info">
		          	<!--	<a href="forgot-password.html" class="text-right pull-right">Forgot password?</a>-->
		          	</div>
								<br>
								 <a class="btn btn-default" href="../index.php"><i class="fa fa-home "></i> Home</a>
		          </div>
		        </div>
		        <hr>
		      </form>
		      <div class="text-center">
		      	<a href="student_signup.php" class="templatemo-create-new">Create new Student account <i class="fa fa-arrow-circle-o-right"></i></a>
		      </div>
		</div>
	</div>
  <?php
  if (isset($_POST['submit']))
  {
    $username=$_POST['student_number'];
   	$password=$_POST['password'];

    if (!preg_match("/^[0-9]+$/",$username))
    {
      $_SESSION['message'] = "No characters allowed only numeric digits ";
       $_SESSION['msg_type'] = "danger";

        $_SESSION['student_number']=$username;
      echo "<script>location.replace('student_signin.php');</script>";
       exit();
    }
  else  {

              $statement=$conn->prepare("select * from student where stu_number=?");
              $statement->bind_param("s",$username);
              $statement->execute();

              $statement_result=$statement->get_result();
              if($statement_result->num_rows >0 )
              {
              $data=$statement_result->fetch_assoc();
              $hashpassword=$data['stu_password'];
              $login_username2=$data['stu_email'];
              $login_username=$data['stu_number'];
              if(password_verify($password,$hashpassword))
              {
              $_SESSION['name'] = $data['stu_name'];
              $name = $_SESSION['name'];

              $_SESSION['id'] = $data['stu_id'];
              $id = $_SESSION['id'];

              $_SESSION['surname'] = $data['stu_surname'];
              $surname = $_SESSION['surname'];

              $_SESSION['email'] = $data['stu_email'];
              $email = $_SESSION['email'];


              $_SESSION['student_number'] = $data['stu_number'];
              $stud_num = $_SESSION['student_number'];


              $_SESSION['gender'] = $data['stu_gender'];
              $gender = $_SESSION['gender'];


              $_SESSION['stu_campus'] = $data['stu_campus'];
              $campus = $_SESSION['stu_campus'];



                 echo "<script>alert('logged in $name');</script>";
                echo "<script>location.replace('s_interface.php');</script>";
              }
              else
              {
              $_SESSION['message'] = "passwords did not match";
                $_SESSION['msg_type'] = "danger";
                 $_SESSION['em'] = $login_username;
               echo "<script>location.replace('student_signin.php');</script>";
                exit();
              }
              }
              else {
              // code...

              $_SESSION['message'] = "Account  does not exist";
                $_SESSION['msg_type'] = "danger";

                echo "<script>location.replace('signIn.php');</script>";
                exit();
              }
            }
  }
  ?>
</body>
</html>
