<div class="kanan">
	<?php if($this->session->userdata('isLogin') == TRUE): ?>
		<p>Selamat datang, </p>
		<hr>
		<a href="<?php echo site_url('home/biodata') ?>">Lengkapi Biodata Anda</a><br>
		<a href="<?php echo site_url('home/cetak') ?>">Cetak Bukti Daftar</a>
		
	<?php endif; ?>

	<a href="https://www.instagram.com/himafortika_stkip/">
		<img src="<?php echo base_url('public/gambar/banner1.jpg') ?>">	
	</a>
</div>