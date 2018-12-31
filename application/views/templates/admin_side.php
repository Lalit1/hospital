<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Hospital</title>

	<!--<link rel="stylesheet" href="<?php// echo base_url(); ?>assets/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<!--<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/scrollbar.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">


	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/site.css">

	<!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/blue.css">-->

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/js/moment.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/2.1.0/bootstrap-filestyle.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/lightbox-plus-jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</head>

<body>
	<div class="admin-sidebar">
		<div class="side-wrap">
			<ul>
				<li><a href="<?php echo base_url('user/dashboard'); ?>"><i class="far fa-user-circle admin-icon"></i><p>Admin</a></p></li>
				<li><a href="<?php echo base_url('user/edit_home'); ?>"><i class="fas fa-home admin-icon"></i><p>Home</a></p></li>
				<li><a href="<?php echo base_url('user/edit_about_us'); ?>"><i class="fas fa-user admin-icon"></i><p>About Us</a></p></li>
				<li><a href="<?php echo base_url('user/edit_departments') ?>"><i class="fas fa-stethoscope admin-icon"></i><p>Departments</a></p></li>
				<li><a href="<?php echo base_url('user/edit_allied_services'); ?>"><i class="fas fa-medkit admin-icon"></i><p>Allied Services</a></p></li>
				<li><a href="#"><i class="fas fa-user-md admin-icon"></i><p>Doctors</a></p></li>
				<li><a href="<?php echo base_url('home'); ?>"><i class="far fa-image admin-icon"></i><p>View</p></a></li>
				<li><a href="<?php echo base_url('user/logout'); ?>"><i class="fas fa-sign-out-alt admin-icon"></i><p>Log Out</p></a></li>
			</ul>
		</div>
	</div>