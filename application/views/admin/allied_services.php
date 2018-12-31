<?php
if (!$this->session->userdata('userId')) {
	$this->load->template('user/login');
}
// echo "<pre>";
// print_r($alliedData);
// die();
?>
<div class="admin-main">
	<div class="admin-wrap">
		<h1>Allied Services</h1>
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
					<strong>Note:</strong> Here you can change content of allied services page.
				</div>


				<!-- about page content -->
				<div class="panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse1"><i class="fas fa-minus-circle accord-icon"></i>Add Allied Services</a>
							</h4>
						</div>
						<div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
								<form action="<?php echo base_url('user/edit_allied_services'); ?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label>Title:</label>
										<input type="text" name="title" class="form-control title-input" required>
									</div>
									<div class="form-group">
										<label>Content:</label>
										<textarea name="content" class="form-control content-input" required=""></textarea>
										<input type="hidden" name="id" class="id-input">
									</div>
									<div class="form-group">
										<label class="control-label">Service Banner:</label>
										<input type="file" class="filestyle" data-buttonText="Select a File" name="al_banner" required>
									</div>
									<button type="submit" class="neon-btn">Save</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php if (!empty($alliedData)) { ?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#collapse2"><i class="fas fa-minus-circle accord-icon"></i>Existing Allied Services</a>
							</h4>
						</div>
						<div id="collapse2" class="panel-collapse collapse in">
							<div class="panel-body">
								<table>
									<thead>
										<th>Title</th>
										<th>Content</th>
										<th>Service Banner</th>
										<th></th>
									</thead>
									<tbody>
										<?php foreach ($alliedData as $key => $value) { ?>
											<tr class="dept-tr">
												<td style="width: 300px;"><p id="dept_title"><?php echo $value['title']; ?></p></td>
												<td style="width: 500px; height: 124px;">
													<div style="width: 500px; height: 124px; overflow: auto">
														<p id="dept_content"><?php echo $value['content']; ?></p>
													</div>
												</td>
												<td>
													<img class="hod-img" src="<?php echo base_url().'uploads/images/allied-banner-img/'.$value['banner_img'] ?>">
												</td>
												<td>
													<p hidden id="dept_id"><?php echo $value['id']; ?></p>
													<a href="javascript:void(0)" title="Edit" id="dept_edit"><i class="fas fa-edit" aria-hidden="true" style="font-size: 20px; padding: 0; margin-bottom: 20px;"></i></a>
													<a href="<?php echo base_url('user/edit_allied_services').'?id='.$value['id']; ?>" title="Delete"><i class="fa fa-trash" aria-hidden="true" style="font-size: 20px"></i></a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
</div>