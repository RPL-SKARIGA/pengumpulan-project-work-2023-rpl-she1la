<?= $this-> extend('layoutAdmin/tempAdmin2.php'); ?>

<?= $this->section('admin'); ?>


<div class="main-wrapper">
  <div class="container">
    <div class="product-div">
      <div class="product-div-left">

        <div class="img-container">
          <img src="/img/wisata/<?= $wisata['img']; ?>" alt="">
        </div>

        <div class="hover-container">
          <div>
            <img src="/img/wisata/<?= $wisata['img']; ?>" alt="">
          </div>
          <div>
            <img src="/img/wisata/<?= $wisata['img2']; ?>" alt="">
          </div>
          <div>
            <img src="/img/wisata/<?= $wisata['img3']; ?>" alt="">
          </div>
        </div>
      </div>

      <div class="product-div-right">
        <span class="product-name"><b><?= $wisata['nama_jasa']; ?></b></span>
        
        <span class="product-price"><i class="fa-solid fa-rupiah-sign"></i> <?= $wisata['harga']; ?>/tiket</span><br>
        
        <h5 class="product-description"><i class="fa-solid log fa-location-dot"></i> <?= $wisata['lokasi']; ?></h5>
        <h5 class="product-description"><i class="fa-solid log fa-ticket"></i> <?= $wisata['harga']; ?></h5>
        <h5 class="product-description"><i class="fa-solid log fa-rainbow"></i> <?= $wisata['kategori']; ?></h5>
        <h5 class="product-description"><i class="fa-solid log fa-clock"></i> <?= $wisata['ket']; ?></h5>
        
        <div class="btn-groups">
          <button type="button" class="edit-now-btn">
            <a href="/admin/edit/<?= $wisata['slug']; ?>"><i class="fa-solid fa-pen"> Edit</i></a>
          </button>

          <form action="/admin/<?= $wisata['id']; ?>" method="post" class="d-inline">
            <?= csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="del-now-btn" onclick="return confirm('mau dihapus benerran?');">
              <i class="fa-solid fa-trash"> Delete</i>
            </button>
          </form>
          <a href="/admin/wisata" class="btn btn-secondary">Back</a>
        </div>

        <br><br>
       

      </div>

    </div>
  </div>
</div>



<?= $this->endSection(); ?>
