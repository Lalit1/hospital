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
</head>

<body>
	<header class="header">
  <!-- 		<div class="container sub-head-top">
  	<div class="header-top">
        <ul class="pull-left">
          <li>Page Last Updated On: 16 December 2017</li>

        </ul>
        <ul class="pull-right right-top-nav">
        	<li class="contact"><a href="javascript:"> <i class="fas fa-phone-volume"></i>+91-9152000110 </a> </li>
        	<li class="book-appointment"><a href="javascript:"> <i class="fas fa-notes-medical"></i> Book Appointment</a> </li>

        </ul>

      </div>
      close header-top
    </div> -->
    <!--close container-->
    <div class="mid-header">
    	<div class="container">
    		<a href="<?php echo base_url() ?>" class="pull-left logo">
    			<img src="<?php echo base_url(); ?>assets/images/logo.png" class="img-responsive site-logo" alt="Neon Hospital">  
    			<span class="site-name">HOSPITAL</span>
    		</a>
    		<div class="pull-right head-contact">
    			<a href="javascript:"> <i class="fas fa-phone-volume"></i>+91-9152000110 </a>
    			<a href="javascript:" class="book-appointment"> <i class="fas fa-notes-medical"></i> Book Appointment</a>
    		</div>
    		<div class="pull-right hide-mobile"> 
    		</div>
    	</div>
    </div>
    <div class="main-nav">
    	<div class="sticky-nav">
    		<div class="container relative"> <a href="javascript:void(0);" class="humburger"><span></span><span></span><span></span></a>
    			<ul>
    				<li> <a href="<?php echo base_url(); ?>">Home</a></li>
          <!--<li class="dropdown"> <a href="about_us.html" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>

            	<ul class="dropdown-menu" >

   					<li><a href="#">Lorem ipsum dolor </a></li>
                    <li class="dropdown-submenu"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lorem ipsum dolor </a>
                    	<ul class="dropdown-menu" >

   					<li><a href="#">Lorem ipsum dolor </a></li>
                    <li><a href="#">Lorem ipsum dolor </a></li>
                    <li><a href="#">Lorem ipsum dolor </a></li>
                    <li><a href="#">Lorem ipsum dolor </a></li>
  				 </ul>
                    </li>
                    <li><a href="#">Lorem ipsum dolor </a></li>
                    <li><a href="#">Lorem ipsum dolor </a></li>
  				 </ul>
  				</li>-->

  				<li> <a href="<?php echo base_url('about'); ?>">About Us</a> </li>
  				<li> <a href="<?php echo base_url('department'); ?>">Departments	</a></li>
  				<li> <a href="<?php echo base_url('alliedServices'); ?>">Allied Services</a></li>
  				<!--<li> <a href="#">patient Services</a></li>-->
  				<li> <a href="<?php echo base_url('doctors') ?>">Know your Doctors</a></li>          
  				<li> <a href="<?php echo base_url('contact'); ?>">Contact Us</a> </li>

  				<?php if ($this->session->userdata('userId')) { ?>
  					<li style="position: relative;" id="user-toggle">
  						<i class="far fa-user-circle user-icon"></i>
  						<div class="user-box" style="display: none;">
  							<ul>
  								<li><a href="<?php echo base_url('user/dashboard'); ?>">Dashboard</a></li>
  								<li><a href="<?php echo base_url('user/logout'); ?>">Log Out</a></li>
  							</ul>
  						</div>
  						<!-- <a href="<?php //echo base_url('user/logout'); ?>">Sign Out</a> -->
  					</li>

  				<?php } ?>

  				<!--<li role="separator" class="divider"></li>-->
          <!--<li class="dropdown d-hide"> <a href="about_us.html" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AWARD <span class="caret"></span></a>

            	<ul class="dropdown-menu" >

   					<li><a href="#">Registration Status </a></li>
                    <li><a href="#">Download Admit Card</a></li>
                    <li><a href="#">Check Result </a></li>
                    <li><a href="#">Download Marksheet</a></li>
  				 </ul>

  				</li>-->

  			</ul>


  		</div>


  		<div class="hdr-form d-hide">
  			<i  class="fa fa-search"></i>
  			<input name="" type="text" placeholder="Search" class="form-control">

  		</div>

  	</div>
  </div>
</header>
<div class="sticky-head" style="display: none;">
	<div class="sticky-head-wrap">

		<div class="sticky-logo">
			<img src="<?php echo base_url(); ?>assets/images/logo.png" class="img-responsive site-logo" alt="Neon Hospital"> 
			<p>Hospital</p>
		</div>
		<div class="sticky-navigation">
			<ul>
				<li> <a href="<?php echo base_url(); ?>">Home</a></li>
				<li> <a href="<?php echo base_url('about'); ?>">About Us</a> </li>
				<li> <a href="<?php echo base_url('department'); ?>">Departments  </a></li>
				<li> <a href="<?php echo base_url('alliedServices'); ?>">Allied Services</a></li>
				<!--<li> <a href="#">patient Services</a></li>-->
				<li> <a href="<?php echo base_url('doctors'); ?>">Know your Doctors</a></li>            
				<li> <a href="<?php echo base_url('contact'); ?>">Contact Us</a> </li>
			</ul>
		</div>
	</div>
</div>
<!--close header-->
