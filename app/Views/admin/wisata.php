<?= $this-> extend('layoutAdmin/tempAdmin2.php'); ?>

<?= $this ->section('admin'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2">Wisata FunnPlay</h1>

      <?php if(session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>

      <div class="row">

        <div class="col-sm-12">
          <form action="" method="post">
            <div class="input-group mb-3 col-3">
              <div class="col-sm-4">
                <a href="/admin/create" class="btn btn-secondary mb-3">Tambah Data Wisata</a>
              </div>
              
                <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword">
                <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
              
            </div>
          </form>
        </div>
        </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          </tr>
        </thead> 
        <tbody>
          <?php $i=1 + (3 * ($currentPage - 1)); ?>
          <?php foreach ($wisata as $w): ?>
          <tr>
            <th scope="row"><?= $i++ ; ?></th>
            <td><img src="../img/wisata/<?= $w['img2']; ?>" alt="" class="sampul"></td>
            <td><?= $w['nama_jasa']; ?></td>
            <td>
              <a href="/admin/detail/<?= $w['slug']; ?>" class="btn btn-secondary">Detail</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('wisata', 'wisata_pagination'); ?>
    </div>
  </div>
</div>

 
<?= $this->endSection(); ?> 