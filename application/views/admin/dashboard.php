<?php
if (!$this->session->userdata('userId')) {
	$this->load->template('user/login');
}
?>
<div class="admin-main">
	<div class="admin-wrap">
		<h1>Hello Name</h1>
	</div>
</div>