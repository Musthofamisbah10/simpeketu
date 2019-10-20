<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Login System</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style_login.css') ?>">
</head>
<body>
	<div class="container">
		<img src="<?= site_url('assets/images/mimin.png') ?>" class="mimin">
		<h1>Login System</h1>
		<?php echo $this->session->flashdata('pesan');?>
		<div class="input">
			<?= form_open('auth/proses'); ?>
				<p>Username</p>
				<input type="text" name="username" required="" placeholder="Enter Username"><br>
				<p>Password</p>
				<input type="password" name="password" required="" placeholder="Enter Password"><br>
				<button type="submit">Login</button>
			<?= form_close() ?>
		</div>
	</div>
</body>
</html