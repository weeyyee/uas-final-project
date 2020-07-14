<?php $this->load->view('header'); ?>

<div class="utama">
    <div class="kiri">
    <h3>Pendaftaran Akun</h3>
    <p>Silahkan lengkapi formulir dibawah:</p>

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
            <input type="submit" name="Buat Akun">
        </p>
        <?php if (validation_errors()): ?>
        <h3> SORRY, PLEASE CHECK AGAIN..</h3>
        <?php echo validation_errors(); ?>
        <?php endif ?>
        </form>
        </form>

    </div>
    <?php $this->load->view('kanan'); ?>
    </div>

    <?php $this->load->view('footer'); ?>