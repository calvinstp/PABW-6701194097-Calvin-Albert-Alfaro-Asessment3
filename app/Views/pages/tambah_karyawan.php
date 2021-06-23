<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <h2> Tambah Karyawan </h2>
    <div class="row">
        <div class="col ">
            <div class="card ">

                <div class="card-body">

                    <form action="/karyawan/save" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title">Nama Karyawan</label>
                            <input type="text" name="nama_karyawan" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="title">No Hp</label>
                            <input type="number" name="no_hp" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="title">Alamat</label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10" placeholder=""></textarea required>
                        </div>
                        <button type="submit" name="status" value="published" class="btn btn-success btn-block">Tambah </button>
                        <!-- <br> -->
                        <a href="<?= base_url() ?>" type="submit" name="" value="draft" class="btn btn-light btn-block ">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>