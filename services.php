
<!DOCTYPE html>
<html lang="en">
<head>

	
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> 
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" />  
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> 
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	
	
</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home.php">VIT Hostel<span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item active">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>
						
						
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="message_user.php">Message Received</a>
					</li>
						<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['roll']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="profile.php">My Profile</a>
							</li>
							<li>
								<a href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
					</ul>
				</div>
			  
			</nav>
		</div>
	</header>
	<!--Header-->
</div>
<!-- //banner --> 

<!-- services -->
<section class="services py-5">
	<div class="container py-lg-5 py-3">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Hostels </h2>
		<div class="row service-grids">
			<div class="col-lg-4 col-md-6 service-grid1">
				<a href="application_form.php"><h3>A Hostel</h3></a>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>1 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>A Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-md-0 mt-5 service-grid1">
				<h3>B Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>3 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>B Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-lg-0 mt-5 service-grid1">
				<h3>C Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>2 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>C Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<h3>D Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>D Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<h3>E Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>E Hostel</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mt-5 service-grid1">
				<h3>F Hostel</h3>
				<div class="row">
					<div class="col-md-3 col-2">
						<h4>4 yr</h4>
					</div>
					<div class="col-md-9 col-10">
						<p>F Hostel</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- services -->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> Apply for A-Hostel</h3>
								<p>A Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=A"><img src="web_home/images/s1.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for B-Hostel</h3>
								<p>B Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=B"><img src="web_home/images/s2.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for C-Hostel</h3>
								<p>C Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=C"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for D-Hostel</h3>
								<p>D Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=D"><img src="web_home/images/s4.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- banner-bottom -->

<br>
<br>

<div class="banner-bottom">
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<!--<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bath" aria-hidden="true"></i>
								<h3> Apply for D-Hostel</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip. Sed semper sem non commodo egestas. In rutrum enim a neque volutpat aliquet</p>
							</div>
							<div class="mask">
								<img src="web_home/images/s1.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>-->
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> Apply for E-Hostel</h3>
								<p>E Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=E"><img src="web_home/images/s2.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for F-Hostel </h3>
								<p>F Hostel</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=F"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<!--<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Office Chairs</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip. Sed semper sem non commodo egestas. In rutrum enim a neque volutpat aliquet</p>
							</div>
							<div class="mask">
								<img src="web_home/images/s4.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>-->
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!-- team -->

<!-- //team -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		
		<div class="footer-grid">
			
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="home.php">Home</a>
					</li>
					
					<li>
						<a href="services.php">Hostels</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
					<li>
						<a href="profile.php">Profile</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>
<!-- footer -->


</body>
</html>