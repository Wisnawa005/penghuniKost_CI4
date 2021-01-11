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
                        <form action="/Penghuni/update/<?= $penghuni['id']; ?>" method="POST" enctype="multipart/form-data">
                            <!-- //digunakan untuk mengimput di halaman ini saja -->
                            <?= csrf_field(); ?>
                            <input type="hidden" name="slug" value="<?= $penghuni['slug']; ?>">

                            <!-- menyimpan file -->
                            <input type="hidden" name="ktpLama" value="<?= $penghuni['image_ktp']; ?>">
                            <input type="hidden" name="personLama" value="<?= $penghuni['image_person']; ?>">

                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input class="form-control form-control-sm" <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?> id="name" name="name" type="text" value="<?= (old('name')) ? old('name') : $penghuni['name']  ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('name'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input text="text" class="form-control" id="status" name="status" value="<?= (old('status')) ? old('status') : $penghuni['status']  ?>">
                            </div>
                            <div class="mb-3">
                                <label for="number_ktp" class="form-label">Number NIK</label>
                                <input text="text" class="form-control" <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?> id="number_ktp" name="number_ktp" value="<?= (old('number_ktp')) ? old('number_ktp') : $penghuni['number_ktp']  ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('name'); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <input text="text" class="form-control" id="alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $penghuni['alamat']  ?>">
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Number HeadPhone</label>
                                <input text="text" class="form-control" id="no_hp" name="no_hp" value="<?= (old('no_hp')) ? old('no_hp') : $penghuni['no_hp']  ?>">
                            </div>
                            <div class="mb-3">
                                <label for="image_person" class="form-label">Image Person</label><br>
                                <img class="card-img-top" src="/upload/person/<?= $penghuni['image_person']; ?>" alt="Card image cap" style="width: 10rem;"><br><br>
                                <input class="form-control form-control-sm <?= ($validation->hasError('image_person')) ? 'is-invalid' : ''; ?> " id="image_person" name="image_person" type="file">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('image_person'); ?>
                                </div><br>
                            </div>
                            <div class="mb-3">
                                <label for="image_ktp" class="form-label">Image KTP</label><br>
                                <img class="card-img-top" src="/upload/ktp/<?= $penghuni['image_ktp']; ?>" alt="Card image cap" style="width: 10rem;"><br><br>
                                <input class="form-control form-control-sm <?= ($validation->hasError('image_ktp')) ? 'is-invalid' : ''; ?> " id="image_ktp" name="image_ktp" type="file">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('image_ktp'); ?>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>