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
                        <hr>
                        <p class="description">
                            <?= $penghuni['status']; ?>
                        </p>
                        <p class="mr-auto text-center">
                            <?= $penghuni['alamat']; ?>
                        </p>
                        <p class="mr-auto text-center">
                            <i class="nc-icon nc-badge"></i> <?= $penghuni['no_hp']; ?>
                        </p>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <hr>
                    <!-- update data -->
                    <a href="/Penghuni/edit/<?= $penghuni['slug']; ?>" class="btn btn-outline-warning"><i class="nc-icon nc-ruler-pencil"></i></a>

                    <!-- delete data -->
                    <form action="/penghuni/<?= $penghuni['id']; ?>" method="POST" class="d-inline">
                        <!-- digunakan supaya todal di haccking  lalu dibuat routes baru-->
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-outline-danger"><i class="nc-icon nc-basket"></i></button>
                    </form>
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