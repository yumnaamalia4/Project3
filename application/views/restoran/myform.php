<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<?php $this->load->view('resto/inner-page'); ?>
<body>
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart('restoran/inputForm'); ?>	

	<?php if ($this->session->flashdata()) : ?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			Data Restoran<strong>Berhasil!</strong> <?= $this->session->flashdata(); ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif; ?>

	<h5>Kode</h5>
	<!-- <input type="text" name="kode" size="50" /> -->
	<?php echo form_input('kode') ?>

	<h5>Nama</h5>
	<?php echo form_input('nama') ?>

	<h5>Kategori</h5>
	<?php
	foreach ($query->result_array() as $row) {
		$kategori[$row['id_kategori']] = $row['nama_kategori'];
	}
	$val = set_value('kategori');
	echo form_dropdown('kategori', $kategori, $val);
	?>

	<h5>Harga</h5>
	<?php echo form_input('harga') ?>

	<h5>Status</h5>
	<?php
	if (set_value('status') == 'Tersedia') {
		$stat = TRUE;
	} else {
		$stat = FALSE;
	}
	echo form_radio('status', 'Tersedia', $stat);
	echo form_label('Tersedia', 'status') . '<br>';
	if (set_value('status') == 'Tidak Tersedia') {
		$stat = TRUE;
	} else {
		$stat = FALSE;
	}
	echo form_radio('status', 'Tidak Tersedia', $stat);
	echo form_label('Tidak Tersedia', 'status') . '<br>';
	?>

	<h5>Deskripsi</h5>
	<?php
	$settextarea = array(
		'name' => 'deskripsi',
		'rows' => '4',
		'cols' => '50'
	);
	echo form_textarea($settextarea) ?>

	<div>

		<?php echo form_submit('submit', 'Tambah'); ?>

	</div>


	</form>

</body>

</html>