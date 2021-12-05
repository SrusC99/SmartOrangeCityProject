<!DOCTYPE html>
<html>
<head>

<?php
require_once('./config.php');
require_once('./sendmail.php');
session_start();


$user_id = $_SESSION["userId"];
$email = $_SESSION["email"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_SESSION["otp"] == $_POST["otp"]){
        // convert the password to the hash
        $password = trim($_POST["password"]);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);   //  password hash

        $sql = "UPDATE `users` SET `pass` = ? WHERE `users`.`id` = ?";
        if ($stmt = $link->prepare($sql)) {
            $stmt->bindParam(1, $password_hash, PDO::PARAM_STR);
            $stmt->bindParam(2, $user_id, PDO::PARAM_STR);

            //==================

            if ($stmt->execute()) {

                // send mail on successful registration
                $mailTitle = "Password Changed";
                $newline = "<br>";
                $mailMsg = "<b>Hello ".$_SESSION["username"]."</b>".$newline.$newline."Password for your account is successfully changed ".$newline.$newline."Your new Login Credentials are: ".$newline.$newline."User Name : ".$_SESSION["username"].$newline."Email : ".$_SESSION["email"].$newline."Password : ".$password.$newline.$newline."<b>Regards</b>,".$newline."www.nagpurorangecity.com";

                //$mailMsg = "<b>Hello ".$param_username."</b>,\r\n Congratulations, You have successfully registered on www.nagpurorangecity.com .\r\n";
                $isMailSent = sendmail($email, $mailTitle, $mailMsg);
                
                //	if registration mail is sent successfully
                if ($isMailSent) {
                    // Unset all of the session variables
                    $_SESSION = array();

                    // Destroy the session.
                    session_destroy();
                    // Redirect to login page
                    header("location: login.php");
                } else {	//	if registration mail is not sent
                    header("location: login.php");
                }
                
                // Redirect to login page
                header("location: login.php");
            // ob_end_flush();
            } else {
                echo "Something went wrong. Please try again later.";
            }



            //====================


        }
        else {
            header("location: forgot_password.php");
        }

    }
    else {
        header("location: forgot_password.php");
    }
    
}


?>




<meta charset="utf-8">
<title>Smart Orange City</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
<link rel="icon" href="images/favicon.jpg" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <header class="main-header header-style-one">
    	
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
						<!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse show collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="current dropdown"><a href="index.html">Home</a></li>
									<li><a href="#contactus">Contact us</a></li>
								</ul>
							</div>
							
						</nav>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fa fa-remove"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->
		
    </header>
    <!--End Main Header -->
	
	<!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button><span class="flaticon-multiply"></span></button>
        </div>
        
        
    </section>
	
	<!-- Page Title Section -->
    <section class="page-title-section">
		<div class="auto-container">
            <h2>Login</h2>
        </div>
    </section>
    <!-- End Page Title Section -->
	
	<!-- Login Section -->
	<section class="login-section">
		<div class="auto-container">
			<div class="image">
				<img src="images/background/4.jpg" alt="" />
				<div class="form-box">
					<div class="box-inner">
						<h4>Login</h4>
						
						<!-- Login Form -->
						<div class="login-form">
							<form method="post" action="reset_password.php">
								
								<div class="form-group">
									<input type="text" name="email" value="<?php echo($email) ?>" placeholder="User Name" readonly>
                                </div>
                                <div class="form-group">
									<input type="text" name="otp" value="" placeholder="OTP" required>
                                </div>
								
								<div class="form-group">
									<input type="password" name="password" placeholder="New Password" required>
                                </div>
                                
                                <div class="form-group">
									<input type="password" name="confirm_password" placeholder="Re-Enter Password" required>
								</div>
								
								
								<div class="form-group">
									<button class="theme-btn btn-style-two" type="submit" value="submit"><span class="txt">RESET PASSWORD</span></button>
									
								</div>
								
								<div class="form-group">
									<div class="register">Don't have login details? <a href="register1.html">Register here.</a></div>
								</div>
								
								
							</form>
								
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Main Footer -->
    <footer class="main-footer">
		<div class="auto-container">
			<!-- Widgets Section -->
            <div class="widgets-section">
				
            	<div class="row clearfix">
				
					<!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget" id="contactus">
									<h4>Contact</h4>
									<ul>
										<li><a href="tel:+91-01912704287">Tel: + 91 01912704287</a></li>
										<li><a href="mailto:www.nagpurorangecity.com">Mail: www.nagpurorangecity.com</a></li>
									</ul>
									<div class="contact-text">Email: nagpurorangecity@gmail.com </div>
								</div>
							</div>
							
							
						</div>
					</div>
					
					<!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h4>Connect with us</h4>
									<ul class="social-icon-one">
										<li><a href="#"><span class="fa fa-facebook-f"></span></a></li>
										<li><a href="#"><span class="fa fa-google-plus"></span></a></li>
										<li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
										<li><a href="#"><span class="fa fa-linkedin"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="logo">
					<a href="index-2.html"><img src="images/logo.png" alt="" /></a>
					<div class="copyright"> 2020. All Rights Reserved.</div>
				</div>
			</div>
			
		</div>
	</footer>
	<!-- End Main Footer -->
	
</div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>