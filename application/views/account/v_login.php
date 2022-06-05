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
        <?php
        // Cetak jika ada notifikasi
        if($this->session->flashdata('sukses')) {
        echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
        }
        ?>
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2>Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
					<?php echo form_open('login');?>
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="#" class="signin-form">
		      		<div class="form-group">
                      
                        <p><input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="Username"/></p>
                        <p> <?php echo form_error('username'); ?> </p>
                       
		      		</div>
	            <div class="form-group">
                    <p><input type="password"  name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>"/></p>
                    <p> <?php echo form_error('password'); ?> </p>
	            </div>
	            <div class="form-group">
	            	<input type="submit" name="btnSubmit" class="form-control btn btn-primary submit px-3" value="Login" />
	            </div>
			  </form>
			  <p class="w-100 text-center">&mdash; Atau kembali ke beranda &mdash;
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

