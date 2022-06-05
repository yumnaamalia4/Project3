<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>

</head>
<?php $this->load->view('resto/inner-page'); ?>
<body>
  <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title">
          <h2>This is our tasty <span>Menu</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

          <div class="box">

            <?php
              foreach ($query->result_array() as $z){   
                echo "<center>";
                echo "<span>" . $z['kode'] ."</span><br>";
                echo "<h4>" . $z['nama'] . " &mdash; &mdash; &mdash;  Rp. " . $z['harga']."</h4> ";
                echo "<p>" . $z['deskripsi'] . "</p>";
                echo "<p>" . $z['kategori'] . " &mdash; <i>" .$z['status'] . "</i></p>";
                echo  "</center><br><hr><br>";
              }
            ?>     
    
          </div>
      </div>
  </section><!-- End Whu Us Section -->

</body>
<br>
<?php $this->load->view('resto/footer'); ?>
</html>



