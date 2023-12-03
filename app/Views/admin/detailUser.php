<?= $this-> extend('layoutAdmin/tempAdmin2.php'); ?>

<?= $this->section('admin'); ?>


<div class="main-wrapper">
  <div class="container">
    <div class="product-div">
      <div class="product-div-left">

        <div class="img-container">
          <img src="/img/user1.png" alt="">
        </div>
      </div>

      <div class="product-div-right">
        <span class="product-name"><b><?=$user['nama']; ?></b></span>
        
        <span class="product-price"><i class="fa-solid fa-key"></i> <?=$user['nik']; ?></span><br>
        
        <h5 class="product-description"><i class="fa-solid fa-phone"></i> <?=$user['telepon']; ?></h5>
        <h5 class="product-description"><i class="fa-solid fa-calendar-days"></i> <?=$user['usia']; ?>Tahun</h5>
        <h5 class="product-description"><i class="fa-solid fa-location-dot"></i> <?=$user['alamat']; ?></h5>
        <h5 class="product-description"><i class="fa-solid fa-envelope"></i> <?=$user['email']; ?></h5>
        
        <div class="btn-groups">
          <a href="/User/user" class="btn btn-secondary">Back</a>
        </div>

        <br><br>
       

      </div>

    </div>
  </div>
</div>



<?= $this->endSection(); ?>
