<?= $this-> extend('layoutAdmin/tempAdmin2.php'); ?>

<?= $this->section('admin'); ?>


<div class="main-wrapper">
<div class="container">
<h2 class="my-4 text-crud">Tambah Data Wisata</h2>
    <div class="product-div">
        <div class="product-div-left">
            <form action="/admin/add" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?> <!-- form hanya bisa di akses dari halaman ini -->
                <div class="row mb-3">
                    <label for="nama_jasa" class="col-sm-3 col-form-label"><b>Nama Jasa</b></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nama_jasa" name="nama_jasa" autofocus value="<?= old('nama_jasa'); ?>" >
                        <div class="invalid-feedback">
                            <?= session()->getFlashdata('nama_jasa'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lokasi" class="col-sm-3 col-form-label"><b>Lokasi</b></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= old('lokasi'); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-3 col-form-label"><b>Tiket</b></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= old('harga'); ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kategori" class="col-sm-3 col-form-label"><b>kategori</b></label>
                    <div class="col-sm-7">
                        <select class="form-control form-select" name="kategori" id="kategori" <?= old('kategori'); ?>>
                            <option selected>Kategori</option>
                            <option value="alam" <?= old('kategori') == 'alam' ? 'selected' : ''; ?>>Alam</option>
                            <option value="wahana" <?= old('kategori') == 'wahana' ? 'selected' : ''; ?>>Wahana</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ket" class="col-sm-3 col-form-label"><b>Waktu</b></label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="ket" name="ket" value="<?= old('ket'); ?>" required>
                    </div>
                </div>
            </div>
            <div class="product-div-right">
            <div class="row mb-1">

                <label for="img" class="col-sm-4 col-form-label"><b>Cover</b></label>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <label class="input-group-text btn btn-secondary" for="img">Choose
                                File</label>
                            <label class="form-control custom-img-label" for="img">Nama file</label>
                        </div>
                        <input class="form-control invisible" type="file" id="img" name="img"
                            value="<?= old('img') ? old('img') : ''; ?>" onchange="previewImg()">
                        </div>
                    </div>
                        
                    <div class="row mb-1">
                    <label for="img2" class="col-sm-4 col-form-label"><b>Cover Admin</b></label>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <label class="input-group-text btn btn-secondary" for="img2">Choose
                                File</label>
                            <label class="form-control custom-img-label2" for="img2"><?= old('img2') ? old('img2') : 'Nama File'; ?></label>
                        </div>
                        <input class="form-control invisible" type="file" id="img2" name="img2"
                            value="<?= old('img2') ? old('img2') : ''; ?>" onchange="previewImg2()">
                        </div>
                    </div>

                    <div class="row mb-1">
                    <label for="img2" class="col-sm-4 col-form-label"><b>Cover Pendukung</b></label>
                    <div class="col-sm-12">
                        <div class="input-group">
                            <label class="input-group-text btn btn-secondary" for="img3">Choose
                                File</label>
                            <label class="form-control custom-img-label3" for="img3"><?= old('img3') ? old('img3') : 'Nama File'; ?></label>
                        </div>
                        <input class="form-control invisible" type="file" id="img3" name="img3"
                            value="<?= old('img3') ? old('img3') : ''; ?>" onchange="previewImg3()">
                        </div>
                    </div>
                <button type="submit" class="btn btn-secondary my-4 tombol">Simpan </button>

                </form>

            </div>

        </div>
    </div>
</div>
<script>
    function previewImg() {
    const gambar = document.querySelector('#img');
    const gambarLabel = document.querySelector('.custom-img-label');
    gambarLabel.textContent = gambar.files[0].name;
    }

    function previewImg2() {
    const gambar = document.querySelector('#img2');
    const gambarLabel = document.querySelector('.custom-img-label2');
    gambarLabel.textContent = gambar.files[0].name;
    }

    function previewImg3() {
    const gambar = document.querySelector('#img3');
    const gambarLabel = document.querySelector('.custom-img-label3');
    gambarLabel.textContent = gambar.files[0].name;
    }
</script>


<?= $this->endSection(); ?>
