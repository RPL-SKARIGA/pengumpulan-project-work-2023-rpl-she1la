<?= $this-> extend('layoutAdmin/tempAdmin2.php'); ?>

<?= $this ->section('admin'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2">Data Pelanggan FunnPlay</h1>

      <?php if(session()->getFlashdata('pesan')): ?>
        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>

      <div class="row">

        <div class="col-sm-12">
          <form action="" method="post">
            <div class="input-group mb-3 col-3">
              
              
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
            <th scope="col">username</th>
            <th scope="col">email</th>
            <th scope="col">Action</th>
          </tr>
        </thead> 
        <tbody>
        <?php $i=1 + (10 * ($currentPage - 1)); ?>
          <?php foreach ($user as $w): ?>
          <tr>
            <th scope="row"><?= $i++ ; ?></th>
            <td><?= $w['nama']; ?></td>
            <td><?= $w['email']; ?></td>
            
            
            <td>
              <a href="/User/detailUser/<?= $w['id_pelanggan']; ?>" class="btn btn-secondary">Detail</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('user', 'user_pagination'); ?>
    </div>
  </div>
</div>

 
<?= $this->endSection(); ?> 