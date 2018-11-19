<div class="main">
	<div class="container-fluid">
		<h1>Post a query</h1>
		<div class="col-md-12 query-main">
			<div class="row">
				<div class="col-md-8 query-form">
					<form action="#" method="Post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="fname" id="query-fname" placeholder="First Name" class="form-control" value="<?php echo set_value('fname'); ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="lname" id="query-lname" placeholder="Laste Name" value="<?php echo set_value('lname'); ?>" class="form-control" >
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" name="email" id="query-email" placeholder="Email" value="<?php echo set_value('email'); ?>" class="form-control" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="phone" name="phone" id="query-phone" placeholder="Phone Number" value="<?php echo set_value('phone'); ?>" class="form-control" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="query" id="query" placeholder="Write your query here" class="form-control" ><?php echo set_value('query'); ?></textarea>
								</div>
							</div>
						</div>
						<button type="submit" class="btn neon-btn">Submit</button>
					</form>
				</div>
				<div class="col-md-4 contact-info">
					<div class="opening-main">
						<div class="opening wrap">
							<div class="neon-contact-info">
								<!-- Single Contact Info -->
								<div class="single-contact-info col-md-12">
									<i class="far fa-clock" ></i>
									<p>Mon - Sat 08:00 - 21:00 <br>Sunday CLOSED</p>
								</div>
								<!-- Single Contact Info -->
								<div class="single-contact-info col-md-12">
									<i class="far fa-envelope" ></i>
									<p>0080 673 729 766 <br>admin@neonhospital.com</p>
								</div>
								<!-- Single Contact Info -->
								<div class="single-contact-info col-md-12">
									<i class="fas fa-map-marker-alt"> </i>
									<p>Thane, Mumbai <br>India</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>