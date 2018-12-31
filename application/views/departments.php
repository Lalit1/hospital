<div class="main">
	<div class="container-fluid">
		<h1>Departments</h1>
		<?php if (!empty($data)) { ?>
			<div class="col-md-12">
				<div class="dpt-sidebar">
					<ul>
						<?php foreach ($data as $key => $value) { ?>
							<li data-id='<?php echo $key+1; ?>' id="dpt-<?php echo $key+1; ?>" class="dpt-side <?php echo ($key+1 == 1)? 'side-active': ''; ?>"><?php echo $value['title']; ?></li>
						<?php } ?>
					</ul>
				</div>
				<div class="dpt-content">
					<?php foreach ($data as $key => $value) { ?>
						<div class="dpt-cnt-<?php echo $key+1 ?> dpt-cnt-main">
							<div class="col-md-12">

								<div class="col-md-8 dpt-cnt">
									<h3><?php echo $value['title']; ?></h3>
									<p><?php echo $value['content']; ?></p>
								</div>
								<div class="col-md-4 dpt-head">
									<img src="<?php echo base_url().'uploads/images/dept-img/'.$value['hod_img']?>">
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php }else ?>
		<p class="no-data">No data found</p>
	</div>
</div>