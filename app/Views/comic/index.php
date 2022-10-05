<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
            <a href="/comics/create" class="btn btn-primary my-3">Add comics</a>
            <h1>Comics List</h1>
            <?php if(session()->getFlashData('pesan')):?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($comics as $c) : ?> <!--$comics disamakan dengan key (`comics`) yang di passing oleh data-->
                    <tr>
                        <th scope="row"><?= $c['id']; ?></th>
                        <td><img src="/img/<?= $c['sampul']; ?>" alt="" class="sampul"></td>
                        <td><?= $c['judul']; ?></td>
                        <td><a href="/comics/<?= $c['slug']; ?>" class="btn btn-success">Details</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>