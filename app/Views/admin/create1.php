<?= $this-> extend('layoutAdmin/tempAdmin2.php'); ?>

<?= $this->section('admin'); ?>

    <div class="container create d-flex justify-content-center align-items-center col-md-12">
    
        
        <div class="col-md-8">
            <h2 class="my-4 text-crud">Tambah Data Wisata</h2>

            <form action="/admin/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?> <!-- form hanya bisa di akses dari halaman ini -->
                <div class="row mb-3">
                    <label for="nama_jasa" class="col-sm-3 col-form-label"><b>Nama Jasa</b></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control <?= (session()->getFlashdata('nama_jasa')) ? 'is-invalid' : '' ;  ?>" id="nama_jasa" name="nama_jasa" autofocus value="<?= old('nama_jasa'); ?>" >
                        <div class="invalid-feedback">
                            <?= session()->getFlashdata('nama_jasa'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="lokasi" class="col-sm-3 col-form-label"><b>Lokasi</b></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= old('lokasi'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga" class="col-sm-3 col-form-label"><b>Tiket</b></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kategori" class="col-sm-3 col-form-label"><b>kategori</b></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?= old('kategori'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="ket" class="col-sm-3 col-form-label"><b>Waktu</b></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="ket" name="ket" value="<?= old('ket'); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="img" class="col-sm-3 col-form-label"><b>Cover User</b></label>
                    <div class="col-sm-7">
                        <div class="mb-3">
                            <input class="form-control" type="file" <?= (session()->getFlashdata('img')) ? 'is-invalid' : '' ;  ?> id="img" name="img">
                            <div class="invalid-feedback">
                                <?= session()->getFlashdata('img'); ?>
                            </div>
                            <!-- <label for="img" class="form-label"></label> -->
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="img2" class="col-sm-3 col-form-label"><b>Cover Admin</b></label>
                    <div class="col-sm-7">
                        <div class="mb-3">
                            <input class="form-control" type="file" id="img" name="img">
                            <!-- <label for="img" class="form-label"></label> -->
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="img3" class="col-sm-3 col-form-label"><b>Pendukung</b></label>
                    <div class="col-sm-7">
                        <div class="mb-3">
                            <input class="form-control" type="file" id="img" name="img">
                            <!-- <label for="img" class="form-label"></label> -->
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-secondary my-4 tombol">Tambah Data </button>
            </form>

        </div>
    
    </div>



<?= $this->endSection(); ?>