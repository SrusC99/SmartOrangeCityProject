<?php
    include_once './class.user.php'; 
    session_start();
    if(isset($_REQUEST[ 'submit'])) 
    { 
        extract($_REQUEST); 
        $result=$user->check_available($checkin, $checkout);
        if(!($result))
        {
            echo $result;
        }
    }    
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>Smart Orange City</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">
<link rel="icon" href="images/favicon.jpg" type="image/x-icon">



<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
</script>
    
    
    <style>
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        h4 {
            color: #ffbb2b;
        }
        h6
        {
            color: navajowhite;
            font-family:  monospace;
        }
        label
        {
            color:#ffbb2b;
            font-size: 13px;
            font-weight: 100;
        }

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
									<li class="dropdown"><a href="hotels.html">Hotels</a>
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
											<li><a href="#picnic">Picnic Spots</a></li>
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
											<li><a href="#malls">Malls</a></li>
											
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

	
<?php
    $sql="SELECT * FROM room_category";
    $result = mysqli_query($user->db, $sql);
    if($result)
    {
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                echo "<div class='row'>
                        <div class='col-md-2'></div>
                        <div class='col-md-6 well'>
                            <h4>".$row['roomname']."</h4><hr>
                            <h6>No of Beds: ".$row['no_bed']." ".$row['bedtype']." bed.</h6>
                            <h6>Facilities: ".$row['facility']."</h6>
                            <h6>Price: ".$row['price']." tk/night.</h6>
                        </div>
                        &nbsp;&nbsp;
                        <a href='admin/edit_room_cat.php?roomname=".$row['roomname']."'>
						<button class='btn btn-primary button'>Edit</button></a>
                        </div>";
            }
        }else
        {
            echo "NO Data Exist";
        }
    }else
    {
        echo "Cannot connect to server".$result;
    }
?>


		</div>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	

	<!-- Main Footer -->
    <footer class="main-footer">
		<div class="auto-container">
			<br><br><br><br><br><br><br>
			
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