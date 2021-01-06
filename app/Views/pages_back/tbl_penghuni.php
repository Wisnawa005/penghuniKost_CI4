<?= $this->extend('layout/back_end/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-with-icon alert-dismissible fade show" data-notify="container">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="nc-icon nc-simple-remove"></i>
                    </button>
                    <span data-notify="icon" class="nc-icon nc-bell-55"></span>
                    <span data-notify="message"><?= session()->getFlashdata('pesan'); ?></span>
                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Penghuni Kost</h4>
                    <a href="/Penghuni/create" class="btn btn-outline-info"><i class="nc-icon nc-simple-add"></i> Tambah Penghuni</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Nomber
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    From
                                </th>
                                <th>
                                    KTP Number
                                </th>
                                <th>
                                    Action
                                </th>
                            </thead>
                            <tbody>
                                <?php $i =  1; ?>
                                <?php foreach ($penghuni as $val) : ?>
                                    <tr>
                                        <td>
                                            <?= $i++ ?>
                                        </td>
                                        <td>
                                            <?= $val['name']; ?>
                                        </td>
                                        <td>
                                            <?= $val['alamat']; ?>
                                        </td>
                                        <td>
                                            <?= $val['number_ktp']; ?>
                                        </td>

                                        <td>
                                            <a href="/penghuni/<?= $val['slug']; ?>" class="btn btn-outline-primary"><i class="nc-icon nc-badge"></i></a>
                                            <a href="/Penghuni/edit" class="btn btn-outline-warning"><i class="nc-icon nc-ruler-pencil"></i></a>
                                            <a href="/Penghuni/delete" class="btn btn-outline-danger"><i class="nc-icon nc-basket"></i></a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>