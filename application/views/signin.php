<div class="container">
	<div class="col-md-offset-3 col-md-6">
		<div class="panel-heading">
			<div class="panel-title text-center">
				<h1 class="title">Hospital Login</h1>
				<hr />
			</div>
		</div>
		<div class="main-login main-center">
			<!-- <form class="form-horizontal" method="post" action="/welcomeuser/signup"> -->
				<?php if ($this->session->flashdata('msg')) {?>
					<div class="alert <?php echo $this->session->flashdata('msgClass') ?>">
					<strong><?php //echo ($this->session->flashdata('msgClass') == 'alert-danger') ? "Oops!" : '' ?></strong>  <?php echo $this->session->flashdata('msg'); ?>
				  </div>
				<?php }?>
			<?php echo validation_errors(); ?>

			<?php	$attributes = array('class' => 'signinForm', 'id' => 'signinForm');
echo form_open('signin', $attributes);?>
				<div class="form-group">
					<label for="email" class="cols-sm-2 control-label">Username / Email</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>" id="email"  placeholder="Enter your Email"/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="cols-sm-2 control-label">Password</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
							<input type="password" class="form-control" name="password" id="password"  <?php echo set_value('password'); ?> placeholder="Enter your Password"/>
						</div>
					</div>
				</div>

				<div class="form-group ">
					<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
				</div>
				<div class="login-register">
					<a href="<?php echo base_url('signup'); ?>">Sign Up</a>
				</div>
				<?php echo form_close(); ?>

		</div>
	</div>
</div>
