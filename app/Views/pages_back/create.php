<?= $this->extend('layout/back_end/template'); ?>

<?= $this->section('content'); ?>

<div class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?= $title; ?></h4>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <form action="/Penghuni/save" method="POST" enctype="multipart/form-data">
                            <!-- //digunakan untuk mengimput di halaman ini saja -->
                            <?= csrf_field(); ?>

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input class="form-control form-control-sm <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?> " id="name" name="name" type="text" value="<?= old('name'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('name'); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input text="text" class="form-control" id="status" name="status" value="<?= old('status'); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="number_ktp" class="form-label">Number NIK</label>
                                <input class="form-control form-control-sm <?= ($validation->hasError('number_ktp')) ? 'is-invalid' : ''; ?> " id="number_ktp" name="number_ktp" type="text" value="<?= old('number_ktp'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('number_ktp'); ?>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <input text="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat'); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Number HeadPhone</label>
                                <input text="text" class="form-control" id="no_hp" name="no_hp" value="<?= old('no_hp'); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="image_person" class="form-label">Image Person</label>
                                <input class="form-control form-control-sm <?= ($validation->hasError('image_person')) ? 'is-invalid' : ''; ?> " id="image_person" name="image_person" type="file">

                                <!-- <img class="img-thumbnail img-preview" src="/upload/person/default.png" alt="Card image cap" style="width: 8rem;"> -->

                                <div class="invalid-feedback">
                                    <?= $validation->getError('image_person'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="image_ktp" class="form-label">Image KTP</label>
                                <input class="form-control form-control-sm <?= ($validation->hasError('image_ktp')) ? 'is-invalid' : ''; ?> " id="image_ktp" name="image_ktp" type="file">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('image_ktp'); ?>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>