<div class="main">
	<div class="container-fluid">
		<h1>Allied Services</h1>
		<?php if (!empty($alliedData)) { ?>
			<div class="col-md-12 allied-main">
				<div class="dpt-sidebar">
					<ul>
						<?php foreach ($alliedData as $key => $value) { ?>
							<li data-id='<?php echo $key+1 ?>' id="dpt-<?php echo $key+1 ?>" class="dpt-side <?php echo ($key+1 == 1)? 'side-active': ''; ?>"><?php echo $value['title']; ?></li>
						<?php } ?>
					</ul>
				</div>
				<div class="dpt-content">
					<?php foreach ($alliedData as $key => $value) { ?>
						<div class="dpt-cnt-<?php echo $key+1 ?> dpt-cnt-main">
							<div class="col-md-12">
								<div class="allied-banner">
									<img src="<?php echo base_url().'uploads/images/allied-banner-img/'.$value['banner_img']; ?>">
								</div>
								<p><?php echo $value['content']; ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		<?php } else{ ?>
			<p class="no-data">No data found</p>
		<?php } ?>
	</div>
</div>