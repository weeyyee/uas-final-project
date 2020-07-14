<?php $this->load->view('header'); ?>

<div class="utama">
    <div class="kiri">
    <h3>Biodata</h3>
    <p>Lengkapi biodata untuk dapat mencektak bukti pendaftaran</p>

    <?php if($this->session->flashdata('pesan')):?>
        <?php echo $this->session->flashdata('pesan');?>
    <?php endif; ?>
    
    <form action="" method="POST">
    <p>
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo $user->email ?>">
        </p>
        <p>
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" value="<?php echo $user->nama ?>">
        </p>
        <p>
            <label for="hp">Nomor HP</label>
            <input type="text" name="hp" value="<?php echo $user->hp ?>">
        </p>
        <p>
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" value="<?php echo $user->alamat ?>">
        </p>
        <p>
            <input type="submit" name="Simpan Biodata">
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