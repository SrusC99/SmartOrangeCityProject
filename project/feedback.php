<!DOCTYPE html>
<html>
<head>
<?php
require_once('./config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_SESSION["is_feedback_submitted"])) {
        if ($_SESSION["is_feedback_submitted"] == true) {
            
            // // feedback successfully submitted
            echo '<script>',
                'alert("Feedback Submitted successfully.");',
                '</script>'
                ;
            $_SESSION["is_feedback_submitted"] = false;
        } else {
        }
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST";
    $feedbackmsg = $_POST["feedbackmsg"];
    if ($feedbackmsg != null && $feedbackmsg != "") {
        $user_id = $_SESSION["userId"];
        $sql = "INSERT INTO feedback ( user_id, feedback_msg ) VALUES (?, ?)";
        if ($stmt = $link->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(1, $user_id, PDO::PARAM_STR);
            $stmt->bindParam(2, $feedbackmsg, PDO::PARAM_STR);
            if ($stmt->execute()) {
                $_SESSION["is_feedback_submitted"] = true;
                header("location: feedback.php");
            } else {
                $_SESSION["is_feedback_submitted"] = true;
                header("location: feedback.php");
                echo "Something went wrong. Please try again later.";
            }
        }
        else {
            $_SESSION["is_feedback_submitted"] == false;
            header("location: feedback.php");
        }
    } else {
        $_SESSION["is_feedback_submitted"] == false;
        header("location: feedback.php");
    }
    $_SESSION["is_feedback_submitted"] == false;
    header("location: feedback.php");
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
<style>
div.feeback_body {border-style: solid;padding:10px;}
</style>

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

							<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                    	<div class="logo"><img src="images/logo.png" alt="" title=""></a> 
						<a style="padding-left:200px;"><img src="images/discover.jpg" alt="" title=""></a></div>
						
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
									<li><a href="dashboard.html">Home</a></li>
									</li>
									<li><a href="hotels.html">Hotels</a>
										<ul>
											<li><a href="#fivestarhotels">Five Star Hotels</a></li>
											<li><a href="#fourstarhotels">Four Star Hotels</a></li>
											<li><a href="#threestarhotels">Three Star Hotels</a></li>
										</ul>
									</li>
									<li><a href="places.html">Places To Visit</a>
										<ul>
											<li><a href="#temples">Temples</a></li>
											<li><a href="#gardens">Gardens</a></li>
											<li><a href="#lakes">Lakes</a></li>
											
										</ul>
									</li>
									<li><a href="summerfun.html">Summer Fun</a>
										<ul>
											<li><a href="#waterparks">Water Parks</a></li>
											<li><a href="#picnicspots">Picnic Spots</a></li>
											<li><a href="#hillstations">Hill Stations</a></li>
											<li><a href="#pubs">Pubs</a></li>
										</ul>
									</li>
									<li><a href="flights.html">Flights</a>
										
									</li>
									<li><a href="metro.html">Metro Stations</a>
										
									</li>
									<li><a href="shopping.html">Shopping</a>
										<ul>
											<li><a href="articles-detail.html">Malls</a></li>
											
										</ul>
									</li>
									<li><a href="restaurents.html">Restaurents</a>
										<ul>
											<li><a href="#haldiram">Haldiram's</a></li>
											<li><a href="#pizzahouse">Pizza House</a></li>
											<li><a href="#khanakhazana">Khana Khazana</a></li>
											<li><a href="#dominos">Dominos</a></li>
											<li><a href="#macdonald">Mac Donald</a></li>
											<li><a href="#paninos">Paninos</a></li>
											<li><a href="#southindian">South Indian</a></li>
											<li><a href="#chinese">Chinese</a></li>
											<li><a href="#icecreamparlours">Ice Cream Parlours</a></li>
											<li><a href="#coffeehouse">Coffee House</a></li>
										</ul>
									</li>
									<li><a href="feedback.php">Feedback</a>
										
									</li>
									
								</ul>
							</div>
							
						</nav>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!--End Header Upper-->
							
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
            <h1>Hey, how was your experience over this website?</h1>
			<h2>Your feedback is really important to us - it keeps us motivated and help us serve you better.</h2>
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
						<h4>Feedback</h4>
						
						<!-- Login Form -->
						<div class="login-form">
							<form method="post" action="">
								
								<div class="form-group">
									<input type="text" name="username" placeholder="Your Name" value="<?php echo($_SESSION["username"]) ?>"  readonly>
								</div>
								
								<div class="form-group">
									<input type="email" name="email" placeholder="E-Mail" value="<?php echo($_SESSION["email"]) ?>"  readonly>
								</div>
								
								<div class="form-group">
									<textarea type="text" name="feedbackmsg" placeholder="Write Something..." required></textarea>
								</div>
								
								<div class="form-group">
									<button class="theme-btn btn-style-two" type="submit" name="submit-form"><span class="txt">SUBMIT</span></button>
								</div>
								
								<!-- dailog box code -->
								
							</form>
								
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- End About Section -->
    
    <!-- Load feedback Section -->
    <div style="overflow-y: scroll; height:400px;">

    
    <?php
    //  fetch the feedback data
    //  most recent 5 entries
    $feedback_array = array();
    //SELECT * FROM yourTableName ORDER BY id DESC LIMIT 10
    $sql = "SELECT users.username,users.email,feedback_msg,feedback_time FROM feedback INNER JOIN users ON feedback.user_id = users.id ORDER BY feedback.id DESC LIMIT 5";


    if ($stmt = $link->prepare($sql)) {
        //$stmt->bindParam(1, $feedbackFetchLimit, PDO::PARAM_STR);
        if ($stmt->execute()) {
            $feedback_array = $stmt->fetchAll();

            foreach ($feedback_array as $feedback) {
                echo '<div class="feeback_body" border="10px" padding="17px">';
                echo "<p>By : ".$feedback["username"]."</p>";
                echo "<div>".$feedback["feedback_msg"]."</div><br>";
                echo "<p>On : ".$feedback["feedback_time"]."</p><br>";
                echo "</div>";
            }


            //print_r($result);
        }
    }

    
    ?>

    </div>


    <!-- Load feedback Section -->

	<p><center><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
	<br><br>
	
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
                                <div class="footer-widget contact-widget">
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