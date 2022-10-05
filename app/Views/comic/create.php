<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="my-3">Add comic data form</h3>

                <form action="/comics/save" method="post">
                    <?= csrf_field(); ?> <!--Cross Site Resource Forgery, form encryption-->
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control <?= ($validation->hasError('judul'))? 'is-invalid' : ''; ?>"  id="judul" name="judul" autofocus value="<?= old('judul'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('judul'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penulis" class="col-sm-2 col-form-label">Writer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penerbit" class="col-sm-2 col-form-label">Publisher</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sampul" class="col-sm-2 col-form-label">Cover</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sampul" name="sampul" value="<?= old('sampul'); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>