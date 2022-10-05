<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="mt-2">Comic Detail</h3>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="/img/<?= $comics['sampul']; ?>" class="card-img">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $comics['judul']; ?></h5>
                            <p class="card-text"><b>Penulis: <?= $comics['penulis']; ?></b></p>
                            <p class="card-text"><small class="text-muted"><b>Penerbit: <?= $comics['penerbit']; ?></b></small></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                            <br>
                            <a href="/comics">Back to comics list</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>