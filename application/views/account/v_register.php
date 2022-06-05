<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">

	</head>
	<body class="img js-fullheight" style="background-image: url(<?php echo base_url('assets2/images/bg6.jpg')?>);">
    <?php echo form_open('register');?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				<h2>Daftar</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Buat akun baru?</h3>
		      	<form action="#" class="signin-form">
		      		<div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>"/>
                        <?php echo form_error('name'); ?>
		      		</div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>"/>
                        <?php echo form_error('username'); ?>
		      		</div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>"/>
                        <?php echo form_error('email'); ?>
		      		</div>
	            
                <div class="form-group">
                    <input id="password-field" type="password"  name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>"/>
                    <?php echo form_error('password'); ?>
	            </div>
                <div class="form-group">
                    <input id="password-field" type="password" name="password_conf" class="form-control" placeholder="Konfirmasi Password" value="<?php echo set_value('password_conf'); ?>"/>
                    <?php echo form_error('password_conf'); ?> 
	            </div>
	            <div class="form-group">
                    <input type="submit" name="btnSubmit" class="form-control btn btn-primary submit px-3" value="Daftar" />
	            </div>
                <?php echo form_close();?>

	          </form>
	          <p class="w-100 text-center">&mdash; atau kembali ke beranda &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="<?= site_url() ?>beranda" class="px-2 py-2 mr-md-1 rounded">Beranda</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

