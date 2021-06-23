<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3 ">
    <div class="row ">
        <div class="col-md-6">
            <h2>Data Karyawan</h2>
        </div>
        <div class="col-md-6">
            <a class="btn btn-success" href="<?= base_url('karyawan/tambahKaryawan') ?>" c>Tambah Karyawan</a>
        </div>
        <div class="col">
            <?php if (session()->getFlashData('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashData('success') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table mt-2">
                        <thead class=" ">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Karyawan</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($karyawan as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>

                                    <td><?= $k['nama_karyawan'] ?></td>
                                    <td><?= $k['tgl_lahir'] ?></td>
                                    <td><?= $k['no_hp'] ?></td>
                                    <td><?= $k['alamat'] ?></td>
                                    <td><?php if ($k['is_aktif'] == 1) : ?>
                                            Aktif
                                        <?php else : ?>
                                            Tidak Aktif
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('karyawan/delete/' . $k['id'])  ?>" class="btn btn-danger" onclick="return confirm('yakin?');">Delete</a>
                                        <a href="<?= base_url('karyawan/editKaryawan/' . $k['id'])  ?>" class="btn btn-success">Edit</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <?php $i; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>