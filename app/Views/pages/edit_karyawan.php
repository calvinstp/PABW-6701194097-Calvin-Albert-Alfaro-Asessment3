<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt-3">
    <h2> Edit karyawan </h2>
    <div class="row">
        <div class="col">
            <div class="card ">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <div class="card-body">
                    <form action="/karyawan/edit" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" class="form-control" placeholder="" required value="<?= $karyawan['id'] ?>">

                        <div class="form-group">
                            <label for="title">Nama Karyawan</label>
                            <input type="text" name="nama_karyawan" class="form-control" placeholder="" required value="<?= $karyawan['nama_karyawan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" placeholder="" required value="<?= $karyawan['tgl_lahir'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">No Hp</label>
                            <input type="number" name="no_hp" class="form-control" placeholder="Rp" required value="<?= $karyawan['no_hp'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="title">Alamat</label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10" placeholder="keterangan karyawan"><?= $karyawan['alamat'] ?></textarea required value="">
                        </div>
                        <div class="form-group mt-1">
                        <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status"  >
                                <?php if ($karyawan['is_aktif'] == 1) : ?>
                                <option selected value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                                <?php else : ?>
                                <option value="1">Aktif</option>
                                <option selected value="0">Tidak Aktif</option>
                                <?php endif; ?>
                                
                                </select>
                            
                        </div>

                        <div class="form-group">
                        </div>
                        <button type="submit" name="submit"  class="btn btn-success btn-block">Save</button>
                        <!-- <br> -->
                        <a href="<?= base_url() ?>" type="submit" name="" value="draft" class="btn btn-light btn-block ">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>