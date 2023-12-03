<?= $this-> extend('layout1/templ2.php'); ?>

<?= $this->section('content'); ?>
  


  <div class="home-section">
      <div class="container-fluid gx-0">

            <!-- slider -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">

                         <div class="home-content img-1">
                            <div class="content-homes">
                                
                                <h3 class="heading-home">LET US TAKE TO YOU</h3>
                                <h2 class="heading-lg-home">DREAM DESTINATION</h2>
                                <a href="#" class="btn-home">Explore More</a>

                            </div>
                        </div>
              
                    </div>
                </div>
            </div>

      </div>
    </div>


    <!-- product -->


    <h2 class="heading_lg" style="text-align: center;">Travel & Tours Packages</h2>
    
    <div class="container-packages">
      <div class="container">
        <div class="row">
          
          
          <?php foreach($galeri as $g) : ?>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="content-packages">

                <div class="img-package">
                  <img src="/img/wisata/<?= $g['img']; ?>" alt="" class="image-package">
                </div>

                <div class="content-package-container">

                  <div class="details-package">
                    <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-location-dot"></i></span><?= $g['slug']; ?></p>
                    <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-clock"></i></span><?= $g['ket']; ?></p>
                    <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-heart"></i></span>118</p>
                  </div>

                  <h4 class="heading-content-package">Dapatkan Liburan Menyenangkanmu Disini!</h4>

                  <hr>
                  <div class="rating">
                    <p class="rate"><span class="stars"><i class="fa-solid fa-rupiah-sign"></i></span><?= $g['harga']; ?></p>
                    <a href="#" class="btn-service">Show</a>
                  </div>

                </div>

              </div>
            </div>

          <?php endforeach; ?>

          </div>
        </div>
      </div>
    

    <?= $this->endSection(); ?>

    <!-- 7, 26.03 -->