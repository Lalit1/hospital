<div class="main">
	<div class="container-fluid">
		<h1>Log In</h1>
		<div class="col-md-12 contact-main">
			<div class="row">
				<div class="login-box">
					<div class="login-wrap">
						<form action="<?php echo base_url('user/login'); ?>" method="post" class="login-form">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" />
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password" />
							</div>
							<button type="submit" class="btn neon-btn">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>