<?php
if (!$this->session->userdata('userId')) {
	$this->load->template('user/login');
}
?>
<div class="admin-main">
	<div class="admin-wrap">
		<h1>Admin Dashboard</h1>
		<?php if ($this->session->flashdata('success')) { ?>
			<div class="alert alert-success">
				<strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
			</div>
		<?php } elseif($this->session->flashdata('error')) { ?>
			<div class="alert alert-danger">
				<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
			</div>
		<?php } ?>
		<div class="container-fluid">
			<div class="row">	
				<h2>Hello <?php echo $fname.' '.$lname; ?></h2>
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1"><i class="fas fa-minus-circle accord-icon"></i>Personal Info</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<form action="<?php echo base_url('user/info_update') ?>" method="post" class="admin-info-form">
									<div class="row">
										<div class="col-md-8">
											<input type="text" name="fname" placeholder="First Name" class="form-control form-group" value="<?php echo $fname; ?>" required />
										</div>
										<div class="col-md-8">
											<input type="text" name="lname" placeholder="Last Name" class="form-control form-group" value="<?php echo $lname; ?>" required />
										</div>
										<div class="col-md-8">
											<button type="submit" class="neon-btn">Save</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#collapse2"><i class="fas fa-minus-circle accord-icon"></i>Login Credentials</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse in">
						<div class="panel-body">
							<form action="<?php echo base_url('user/update_credentials'); ?>" method="post" class="admin-cred-form">
								<div class="row">
									<div class="col-md-8">
										<input type="email" name="email" placeholder="Email" class="form-control form-group" value="<?php echo $email; ?>" />
									</div>
									<div class="col-md-8"> 
										<input type="password" name="pass" placeholder="New Password" class="form-control form-group" id="inputPassword" />
									</div>
									<div class="col-md-8">
										<input type="password" name="confPass" placeholder="Confirm Password" class="form-control form-group" data-match="#inputPassword" data-match-error="Whoops, these don't match" />
										<div class="help-block with-errors"></div>
									</div>
									<div class="col-md-8">
										<button type="submit" class="neon-btn">Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>