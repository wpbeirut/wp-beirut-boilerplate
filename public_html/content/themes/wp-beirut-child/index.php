<?php
// developed for wordpress 10th meetup April 3 2018
// please fill your name and job title and push it from dev to staging.
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
		    	<div style="margin:0 auto">
	    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" />
	</div>
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								Full Name
							</div>
							<div class="cell">
								Age
							</div>
							<div class="cell">
								Job Title
							</div>
							<div class="cell">
								Location
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Ali Bashir
							</div>
							<div class="cell" data-title="Age">
								25
							</div>
							<div class="cell" data-title="Job Title">
							    Wordpress Developer
							</div>
							<div class="cell" data-title="Location">
								Saida
							</div>
						</div>

						<div class="row">
							<div class="cell" data-title="Full Name">
								Fadi Nicolas Zahhar
							</div>
							<div class="cell" data-title="Age">
								38
							</div>
							<div class="cell" data-title="Job Title">
								Modern Full Stack Developer
							</div>
							<div class="cell" data-title="Location">
								Mansouriyeh
							</div>
						</div>


					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="<?php echo get_stylesheet_directory_uri() ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo get_stylesheet_directory_uri() ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo get_stylesheet_directory_uri() ?>/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/main.js"></script>

</body>
</html>