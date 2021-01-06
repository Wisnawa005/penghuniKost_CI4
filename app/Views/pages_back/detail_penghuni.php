<?= $this->extend('layout/back_end/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="/upload/683028.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">

                        <img class="avatar border-gray" src="<?= base_url() . '/upload/person/' . $penghuni['image_person']; ?>" alt="gambar_orang">
                        <h5 class="title"><?= $penghuni['name']; ?></h5>

                        <p class="description">
                            <?= $penghuni['status']; ?>
                        </p>
                    </div>
                    <p class="description text-center">
                        <?= $penghuni['alamat']; ?>
                    </p>
                </div>
                <div class="card-footer">
                    <hr>
                    <div class="button-container">
                        <div class="row">

                            <div class="col-lg-12 mr-auto">
                                <h5><?= $penghuni['no_hp']; ?><small>Spent</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-8">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title"><?= $title; ?></h5>
                </div>
                <div class="card-body">
                    <center>
                        <img src="<?= base_url() . '/upload/ktp/' . $penghuni['image_ktp'] ?>" style="width:400px;height:250px" alt="Card image cap">
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>