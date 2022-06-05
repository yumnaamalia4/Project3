<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>List Menu</title>

</head>
<?php $this->load->view('resto/inner-page'); ?>
<body>

	<section id="why-us" class="why-us">
      <div class="container">
		<div class="box">
        <div class="section-title">
          <h2>This is our tasty <span>Menu</span></h2>
		  </div>
		  
		  <div class="col-xl-7 mx-auto ">

    <?php
    foreach ($query->result_array() as $z){   
			
		echo "<center>";
		echo "<br><hr><br><b>" . $z['kode'] ."</b><br>";
		echo $z['nama'] . " . . . . . . . . . . . . . . . . . . .";
		echo "Rp. " . $z['harga']."<br>";
		echo "<div class=\"menu-ingredients\">" . $z['deskripsi'] . "<br>";
		echo $z['kategori'] . " &mdash; <i>" .$z['status'] . "</i><br>";
		echo "<br>"; ?>
				<a href="<?php echo base_url(); ?>restoran/edit/<?php echo $z['kode']; ?>" class="book-a-table-btn">Edit</a>
				<a href="<?php echo base_url(); ?>restoran/deleteForm/<?php echo $z['kode']; ?>" class="book-a-table-btn">Delete</a>
		<?php
		echo "<br>";
		echo "</center>";
        
            // echo $row->name;
            // echo $row->body;
        }
        ?>

		</div>
		</div>
      </div>
  </section><!-- End Whu Us Section -->

</body>
<br>
<?php $this->load->view('resto/footer'); ?>
</html>



