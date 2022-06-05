<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<?php $this->load->view('resto/inner-page'); ?>
<body>

<form method="post" action="<?php echo base_url(); ?>Restoran/UpdateForm" >

<h5>Kode</h5>
<input type="text" name="kode" id="" value="<?= $restoran['kode']; ?>"  size="50" >
<div class="form-text text-danger"><?=form_error('kode');?></div>

<h5>Nama</h5>
<input type="text" name="nama" value="<?= $restoran['nama']; ?>" size="50" >
<div class="form-text text-danger"><?=form_error('nama');?></div>

<h5>Kategori</h5>
<?php
foreach($query -> result_array() as $row)
{
	$kategori[$row['id_kategori']]=$row['nama_kategori'];
}
$val = set_value($row['nama_kategori']);
echo form_dropdown('kategori', $kategori, $val);
?>

<h5>Harga</h5>
<input type="number" name="harga" value="<?= $restoran['harga']; ?>"  size="50" />
<div class="form-text text-danger"><?=form_error('harga');?></div>

<h5>Status</h5>
<input type="radio" name="status" value="Tersedia"<?php 
    echo ($restoran['status']) == 'Tersedia' ? 'checked' : ''; 
?>/>Tersedia<br>
<input type="radio" name="status" value="Tidak Tersedia"<?php 
    echo ($restoran['status']) == 'Tidak Tersedia' ? 'checked' : ''; 
?>/>Tidak Tersedia<br>

<h5>Deskripsi</h5>
<textarea id="deskripsi" name="deskripsi" rows="4" cols="50"><?= $restoran['deskripsi']; ?> 
</textarea>
<div class="form-text text-danger"><?=form_error('deskripsi');?></div>

<div><button type="submit" name="submit" class="btn btn-primary">Update</button></div>

</form>
</body>
</html>


