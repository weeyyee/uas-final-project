<?php $this->load->view('header'); ?>

<div class="utama">
    <div class="kiri">
    <h3>Halaman login</h3>
    <p>Silahkan login menggunakan akun anda, jika belum memiki akun silahkan daftar melalui halaman Pendaftaran</p>

    <?php if($this->session->flashdata('pesan')):?>
        <?php echo $this->session->flashdata('pesan');?>
    <?php endif; ?>
    
    <form action="" method="POST">
        <p>
            <label for="email">Email</label>
            <input type="text" name="email">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="text" name="password">
        </p>
        <p>
            <input type="submit" name="Login">
        </p>

        <?php if (validation_errors()): ?>
        <h3> SORRY, PLEASE CHECK AGAIN..</h3>
        <?php echo validation_errors(); ?>
        <?php endif ?>

    </div>
    <?php $this->load->view('kanan'); ?>
    </div>

    <?php $this->load->view('footer'); ?>