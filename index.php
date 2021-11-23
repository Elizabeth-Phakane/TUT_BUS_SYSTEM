<!DOCTYPE html>

 <html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>TUT Bus System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/slit-sliderr.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">

        <link rel="shortcut icon" href="img/TUT-Logo1.jpg" type="image/x-icon">


        <link href="Assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>

    <body id="body">

<!--		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>-->


        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->

					<!-- logo -->
					<div class="navbar-brand">
						<a href="#body"><img src="img/logo2.jpeg" height="50"></a>
					</div>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Home</a></li>

                        <li><a href="#portfolio">TUT Buses</a></li>
                          <li><a href="#contact">Developer</a></li>
                          <li><a href="#service">Login/SignUp</a></li>



                    </ul>
                </nav>
				<!-- /main nav -->

            </div>
        </header>

		<main class="site-content" role="main">
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                          <!--  <div class="caption-content">
                                <h2 class="animated fadeInDown">Web Studio one page Bootstrap theme</h2>
                                <span class="animated fadeInDown">Built with professionalism and fun</span>
                                <a href="#" class="btn btn-blue btn-effect">More</a>
                            </div>-->
                        </div>

					</div>

					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                        <!--    <div class="caption-content">
                                <h2>Web Studio for business</h2>
                                <span>This theme can be used for web studio business</span>
                                <a href="#" class="btn btn-blue btn-effect">Read more</a>
                            </div>-->
                        </div>

					</div>

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">

						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                          <!--  <div class="caption-content">
                                <h2>Web Studio unique design</h2>
                                <span>Responsive and clean design built by HTML5 and Bootstrap</span>
                                <a href="#" class="btn btn-blue btn-effect">View more</a>
                            </div>-->
                        </div>

					</div>
				</div>

                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>


				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>


			<section id="about" >
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-md-offset-1 wow animated fadeInLeft">
							<div class="welcome-block">
								<h3>About TUT Bus System</h3>
								<div class="message-body">
									<img src="img/TUT-Logo1.jpg" class="pull-left" alt="member"><br>
									<p>A digital system aimed to allow students to book a seat in a bus and also help maintain the COVID-19 Protocols. </p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


      <section id="service">
        <div class="container">
          <div class="row">

            <div class="sec-title text-center">
              <h2 class="wow animated bounceInLeft">Login/SignUp Portal</h2>
              <p class="wow animated bounceInRight">as Admin and as Student</p>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fa fa-bus fa-3x"></i>
                </div>
                <h4>As Admin</h4>
                <p><a href="admin/admin_signin.php"> Bus Admin (SignIn) </a>.<i class="fa fa-sign-in fa-2x"></i> </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
              <div class="service-item">
                <div class="service-icon">
                  <i class="fa fa-users fa-3x"></i>
                </div>
              <h4>As Student</h4>
                <p><a href="student/student_signin.php"> Student (SignIn) </a><i class="fa fa-sign-in  fa-2x">.</i></p><br>
                <p><a href="student/student_signup.php"> Student (SignUp) </a><i class="fa fa-pencil-square-o fa-2x">.</i></p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <h3 class="text-center">Corona Live Stats</h3>
          <div style="width: 100%; background-color: white; padding: 10px 0px 10px 0px; text-align: center; box-sizing: border-box;">
          <a style="display: flex; justify-content: center; flex-wrap: wrap; width:100%; text-decoration:none; text-align:center;" href="https://sacoronavirus.co.za/">
          <div class="main-corona-banner" style="display: inline-block; background-color: white; flex-grow: 2;">
          <img style="width: 294px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/main.png" alt="South African Government COVID-19 Portal" />
          </div>
          <div style="display: flex; flex-grow: 4; justify-content: center; flex-wrap: wrap;">
          <div style="display: flex; flex-grow: 1; justify-content: space-around; flex-wrap: wrap;">
            <div class="corona-icon" style="display: inline-block; flex-grow: 0; background-color: white;">
              <img style="width: 179px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/tested.png" alt="South Africa COVID-19 Tested Numbers" />
            </div>
            <div class="corona-icon" style="display: inline-block; flex-grow: 0; background-color: white;">
              <img style="width: 179px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/positive.png" alt="South Africa COVID-19 Positive Cases" />
            </div>
          </div>
          <div style="display: flex; flex-grow: 1; justify-content: space-around; flex-wrap: wrap;">
            <div class="corona-icon" style="display: inline-block; flex-grow: 0; background-color: white;">
              <img style="width: 179px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/cured.png" alt="South Africa COVID-19 Recovered Numbers" />
            </div>
            <div class="corona-icon" style="display: inline-block; flex-grow: 0; background-color: white;">
              <img style="width: 179px !important;" src="https://embracecloud.s3.eu-west-2.amazonaws.com/deaths.png" alt="South Africa COVID-19 Death Numbers" />
            </div>
          </div>
          </div>
          </a>
          <div style="text-align: center; background-color: white;">
          <a style="font-family: arial; text-decoration: none; font-size: 11px; color: #878787;" href="https://embrace.co.za/sacoronavirus-link"></a>
          </div>
          </div>
<br>

			<section id="portfolio">
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>TUT Buses</h2>
							<p>Some of the buses students use as means of travelling.</p>
						</div>


						<ul class="project-wrapper wow animated fadeInUp">
							<li class="portfolio-item">
								<img src="img/starbus.jpg" class="img-responsive" alt="">
								<figcaption class="mask">
									<h3>Stabus</h3>
									<p>Travels from Arcadia to Pretoria Campus and vice versa </p>
								</figcaption>

							</li>

							<li class="portfolio-item">
								<img src="img/saafrica1a.jpeg" class="img-responsive" alt=" ">
								<figcaption class="mask">
									<h3>SSAfrica</h3>
									<p>Travels form Sosha South to Sosha North and vice-versa. </p>
								</figcaption>

							</li>

							<li class="portfolio-item">
								<img src="img/ammo1a.jpeg" class="img-responsive" alt="">
								<figcaption class="mask">
									<h3>Amogelang</h3>
									<p>Travels from Sosha to Pretoria Campus and Arcadia ,vice-versa. </p>
								</figcaption>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<!-- Contact section -->
			<section id="contact" >
				<div class="container">
					<div class="row">

						<div class="sec-title text-center wow animated fadeInDown">
							<h2>Developer</h2>
							<p style="text-align:left;">Elizabeth Phakane</p>
						</div>


						<div class="col-md-7 contact-form wow animated fadeInLeft">
            <!--    <label style="font-size:60px;">Hi</label>-->
                <img src="img/eli.jpeg" class="img-responsive" alt="" width="500" height="100">
                <figcaption class="mask">
							</form>
						</div>

						<div class="col-md-5 wow animated fadeInRight">
							<address class="contact-details">
								<h3>About Me</h3>
                		<p><i class="fa fa-desktop"></i>I am a Front-End and Back-End Developer </p><br>
								<p><i class="fa fa-code"></i>Languages .<span>HTML/CSS</span> <span>SQL </span><span>PHP</span></p><br>
								<p><i class="fa fa-user"></i>I am always willing to learn something new, There is less women in the ICT industry I believe i can make a major difference and inspire more women to join the ICT industry</p>

							</address>
						</div>
					</div>
				</div>
			</section>



	<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
							<!--<p>Subscribe newsletter</p>
							<p>Lorem ispum dolor sit amet</p>
            </div>-->
					<!--	<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field">
								<input type="email" class="subscribe form-control" placeholder="Enter email">
								<button type="submit" class="submit-icon">
									<i class="fa fa-envelope fa-lg"></i>
								</button>
							</div>
						</form>-->
					<!--	<div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-facebook fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-pinterest fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-linkedin fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
							</ul>
						</div>-->

						<p>Copyright &copy; 2021 by Elizabeth Phakane </p>
					</div>
				</div>
			</div>
		</footer>

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
        <script src="js/jquery.fancybox.pack.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/jquery.slitslider.js"></script>
        <script src="js/jquery.ba-cond.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
