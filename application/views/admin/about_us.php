<?php
if (!$this->session->userdata('userId')) {
	$this->load->template('user/login');
}

// echo $ft_img;
// die();
?>
<div class="admin-main">
	<div class="admin-wrap">
		<h1>About Us</h1>
		<div class="container-fluid">
			<div class="row">
				<?php if ($this->session->flashdata('success')) { ?>
					<div class="alert alert-success admin-note">
						<strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
					</div>
				<?php } elseif($this->session->flashdata('error')) { ?>
					<div class="alert alert-danger admin-note">
						<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
					</div>
				<?php } ?>
				<div class="alert alert-info alert-dismissible fade in admin-note">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<strong>Note:</strong> Here you can change content of about us page.
				</div>


				<!-- about page content -->
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1"><i class="fas fa-minus-circle accord-icon"></i>Add/Edit Content</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<form action="<?php echo base_url('user/edit_about_us'); ?>" method="post">
									<div class="form-group">
										<input type="hidden" name="key" value="1">
										<label for="about_content">About us page content:</label>
										<textarea class="form-control" id="about_content" rows="5" placeholder="Add Content" name='about_content'><?php echo (!empty($content) ? $content : '') ?></textarea>
									</div>
									<button type="submit" class="neon-btn">Save</button>
								</form>
							</div>
						</div>
					</div>

					<!-- about page main image -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse2"><i class="fas fa-minus-circle accord-icon"></i>Feature image</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse in">
							<div class="panel-body">
								<?php if(!empty($ft_img)){ ?>
									<img src="<?php echo base_url().'uploads/images/about-ft-img/'.$ft_img ?>" style="width: 300px; margin-bottom: 20px;" >
								<?php } ?>
								<form action="<?php echo base_url('user/edit_about_us'); ?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input type="hidden" name="key" value="2">
										<input type="file" name="ft_img" class="form-group" id="ft_img">
										<button type="submit" class="neon-btn">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- Carousel images -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse3"><i class="fas fa-minus-circle accord-icon"></i>Carousel Images</a>
							</h4>
						</div>
						<div id="collapse3" class="panel-collapse collapse in">
							<div class="panel-body">
								<p>Carousel Images</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>