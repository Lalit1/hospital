<?php
if (!$this->session->userdata('userId')) {
	$this->load->template('user/login');
}
?>
<div class="admin-main">
	<div class="admin-wrap">
		<h1>Edit Home</h1>
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
				<div class="alert alert-info alert-dismissible fade in admin-note">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Note:</strong> Here you can change content of home page.
				</div>
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1"><i class="fas fa-minus-circle accord-icon"></i>Home Banner</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="banner-gallery"></div>
								<form action="<?php echo base_url('user/upload_banner'); ?>" method="post" class="banner-upload">
									<div class="col-md-8">
										<input type="file" name="banner[]" class="form-group" id="banner-img" multiple>
									</div>
									<div class="col-md-8">
										<button type="submit" class="neon-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>