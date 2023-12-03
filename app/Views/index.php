<?= $this-> extend('layout1/templ.php'); ?>

<?= $this->section('content'); ?>



    <div class="home-section">
      <div class="container-fluid gx-0">

        <!-- slider -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">

              <div class="home-content img-1">
                <div class="content-home">
                
                  <h3 class="heading-home">LET US TAKE TO YOU</h3>
                  <h2 class="heading-lg-home">DREAM DESTINATION</h2>
                  <a href="#" class="btn-home">Explore More</a>

                </div>
              </div>
              
            </div>
            <div class="carousel-item">

              <div class="home-content img-2">
                <div class="content-home">
                  
                  <h3 class="heading-home">TOURS & TRAVEL</h3>
                  <h2 class="heading-lg-home">Let's Discover The World Together</h2>
                  <a href="#" class="btn-home">Explore More</a>

                </div>
              </div>
              
            </div>
          
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            
            <span><i class="fa-solid icon-scroll fa-angles-left"></i></span>

          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            
            <span><i class="fa-solid icon-scroll fa-angles-right"></i></span>

          </button>
        </div>

      </div>
    </div>
  </div>

  <!-- about section -->
  <section class="about" id="about">
    <h2 class="heading-about">ABOUT FUNNPLAY</h2>
    <p class="para-about-details">Selamat Datang di FunnPlay! Silahkan cari apa yang anda ingin cari</p>
  
    <div class="container about-us-content">
      <div class="row">
        <div class="col-lg-3 col-md-12">
          <div class="img-about">
            <img src="/img/icon.jpg" alt="" class="img-fluid image-content">
          </div>
        </div>

        <div class="col-lg-6 col-md-12">
          <div class="content-about">
            <h4 class="heading-content">About Us</h4>
            <p class="para-content-about">
              FunnPlay merupakan sebuah website yang difungsikan untuk mempromosikan Kota Wisata Batu.
              Kota Wisata Batu sendiri merupakan sebuah Kota yang terletak di Provinsi Jawa Timur, Indonesia. 
              Kota ini terletak 90 km sebelah barat daya Surabaya atau 15 km sebelah barat laut Malang.
              Batu dikenal sebagai salah satu kota wisata terkemuka di Indonesia, karena potensi keindahan alam yang luar biasa. 
              Kekaguman bangsa Belanda terhadap keindahan dan keelokan alam Batu membuat wilayah kota Batu disejajarkan 
              dengan sebuah negara di Eropa yaitu Swiss dan dijuluki sebagai De Kleine Zwitserland atau Swiss Kecil di Pulau Jawa.
              Bersama dengan Kota Malang dan Kabupaten Malang, Kota Batu merupakan bagian dari kesatuan wilayah yang dikenal dengan Malang Raya (Wilayah Metropolitan Malang).
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-12">
          <div class="img-about">
            <img src="/img/talun.jpg" alt="" class="img-fluid image-content">
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- about us section completed -->

  <section class="services" id="services">
    <h4 class="heading_sm">Services</h4>
    <h2 class="heading_lg">Travel & Tours Services</h2>

    <div class="container container-services">
      <div class="row">
        <div class="col-lg-3 col-md-6 px-lg-2 my-2">

          <div class="content-services">
            <div class="img-container">
              <img src="/img/pelangi.png" alt="" class="img-service">
            </div>

            <h3 class="heading-tour">Ratusan Wisata</h3>
            <p class="para-tour">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, nulla.</p>
            <a href="#" class="btn-service">Read More</a>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 px-lg-2 my-2">

          <div class="content-services">
            <div class="img-container">
              <img src="/img/bunga.png" alt="" class="img-service">
            </div>

            <h3 class="heading-tour">Ribuan Tanaman</h3>
            <p class="para-tour">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, nulla.</p>
            <a href="#" class="btn-service">Read More</a>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 px-lg-2 my-2">

          <div class="content-services">
            <div class="img-container">
              <img src="/img/sakit.png" alt="" class="img-service">
            </div>

            <h3 class="heading-tour">Layanan yang Memadai</h3>
            <p class="para-tour">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, nulla.</p>
            <a href="#" class="btn-service">Read More</a>
          </div>

        </div><div class="col-lg-3 col-md-6 px-lg-2 my-2">

          <div class="content-services">
            <div class="img-container">
              <img src="/img/mam.png" alt="" class="img-service">
            </div>

            <h3 class="heading-tour">Kuliner Terasik</h3>
            <p class="para-tour">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, nulla.</p>
            <a href="#" class="btn-service">Read More</a>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- services section completed -->

  <section class="packages" id="packages">

    <h4 class="heading_sm">Packages</h4>
    <h2 class="heading_lg">Travel & Tours Packages</h2>

    <div class="container-packages">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="content-packages">

              <div class="img-package">
                <img src="/img/cr2.jpg" alt="" class="image-package">
              </div>

              <div class="content-package-container">

                <div class="details-package">
                  <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-location-dot"></i></span>JP3</p>
                  <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-calendar-days"></i></span>Always</p>
                  <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-users"></i></span>3 orang</p>
                </div>

                <h4 class="heading-content-package">Let's Discover The World Beautiful Places Together</h4>

                <hr>
                <div class="rating">
                  <p class="rate"><span class="stars"><i class="fa-solid fa-star"></i></span>4.8(150)</p>
                  <h4 class="price">IDR.140</h4>
                </div>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="content-packages">

              <div class="img-package">
                <img src="/img/cr3.jpg" alt="" class="image-package">
              </div>

              <div class="content-package-container">

                <div class="details-package">
                  <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-location-dot"></i></span>Jengkoang</p>
                  <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-calendar-days"></i></span>Always</p>
                  <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-users"></i></span>5 orang</p>
                </div>

                <h4 class="heading-content-package">Let's Discover The World Beautiful Places Together</h4>

                <hr>
                <div class="rating">
                  <p class="rate"><span class="stars"><i class="fa-solid fa-star"></i></span>4.8(150)</p>
                  <h4 class="price">IDR.140</h4>
                </div>

              </div>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 my-2">
            <div class="content-packages">

              <div class="img-package">
                <img src="/img/talun.jpg" alt="" class="image-package">
              </div>

              <div class="content-package-container">

                <div class="details-package">
                  <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-location-dot"></i></span>Coban Talun</p>
                  <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-calendar-days"></i></span>Always</p>
                  <p class="detail-text"><span class="icon-detail"><i class="fa-solid fa-users"></i></span>3 orang</p>
                </div>

                <h4 class="heading-content-package">Let's Discover The World Beautiful Places Together</h4>

                <hr>
                <div class="rating">
                  <p class="rate"><span class="stars"><i class="fa-solid fa-star"></i></span>4.8(150)</p>
                  <h4 class="price">IDR.140</h4>
                </div>

              </div>

            </div>
          </div>


        </div>
      </div>
    </div>

  </section>

  <!-- package part finished -->

  <footer>
    <div class="footer-container">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">

            <h3 class="heading-logo footer-logo">Funn<span>Play</span></h3>
            <p class="footer-para">
              FunnPlay merupakan website yang dikhususkan untuk mempromosikan Kota Wisata Batu.
              Disini anda dapat menemukan, menambahkan park park yang belum terekspost oleh orang lain.
              Ayo Hidupkan Kota Wisata Batu dengan meekspost lebih banyak tempat-tempat keren.
            </p>

            <h5 class="heading-sm-footer">FOLLOW US</h5>

            <div class="social-links-footer">
              <i class="fa-brands icon-social-footer fa-square-instagram"></i>
              <i class="fa-brands icon-social-footer fa-square-whatsapp"></i>
              <i class="fa-solid icon-social-footer fa-phone-flip"></i>
              <i class="fa-brands icon-social-footer fa-telegram"></i>
              <i class="fa-solid icon-social-footer fa-envelope"></i>
            </div>

          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">

            <div class="pages-footer">
              <h3 class="heading-pages">Pages Links</h3>
                 <!-- navbar copy from top navbar  -->
                  <ul class="navbar-nav ms-auto" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                      <a class="nav-link footer-links" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link footer-links" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link footer-links" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link footer-links" href="#packages">Packages</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link footer-links" href="#galeri">Galeri</a>
                    </li>
                  </ul>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">

            <h3 class="heading-pages">Contact Us</h3>

            <p class="contact-footer">
              <span class="text-contact"><i class="fa-solid footer-icons fa-location-dot"></i>Cemara Kipas, Batu</span>
              <span class="text-contact"><i class="fa-solid footer-icons fa-envelope"></i>sheila@gmail.com</span>
              
              <span class="text-contact"><i class="fa-solid footer-icons fa-phone-flip"></i>+6081249185581</span>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid gx-0">

      <div class="footer-rights">
        <p class="rights-para">
          Copyright &copy; Web Tutorials.|All Rights Reserved.
        </p>
      </div>

    </div>
  </footer>

  <?= $this->endSection(); ?>

<!-- Durasi = 1.17.04 -->