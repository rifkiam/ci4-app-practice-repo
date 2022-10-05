<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <h5>rifki.ahmad2003@gmail.com</h5>
            <h5>082257328903</h5>
                <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe'] ?></li>
                    <li><?= $a['alamat'] ?></li>
                    <li><?= $a['kota'] ?></li>
                </ul>
                <?php endforeach ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>