<div class="main">
	<div class="container-fluid">
		<h1>Post a query</h1>
		<div class="col-md-12 feedback-main">
			<div class="row">
				<div class="query-form">
					<form action="#" method="Post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="fname" id="feed-fname" placeholder="First Name" class="form-control" value="<?php echo set_value('fname'); ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="lname" id="feed-lname" placeholder="Laste Name" value="<?php echo set_value('lname'); ?>" class="form-control" >
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" name="email" id="feed-email" placeholder="Email" value="<?php echo set_value('email'); ?>" class="form-control" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="phone" name="phone" id="feed-phone" placeholder="Phone Number" value="<?php echo set_value('phone'); ?>" class="form-control" >
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="feedback" id="feedback" placeholder="Write your feedback here" class="form-control" ><?php echo set_value('feedback'); ?></textarea>
								</div>
							</div>
						</div>
						<button type="submit" class="btn neon-btn">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>