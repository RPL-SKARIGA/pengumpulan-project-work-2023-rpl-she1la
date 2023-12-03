<?=$this -> extend('layout/template'); ?>

<?=$this -> section('content'); ?>

<!-- carausel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" id="home">
    <div class="carousel-item active">
      <img src="/img/cr1.webp" class="d-block w-100"  alt="...">
      <div class="carousel-caption">
        <h5>Kota Wisata Batu </h5>
        <p>Kota Batu Sebagai Kota Wisata yang telah Mendunia</p>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/cr3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Kota yang memiliki keindahan tersendiri</h5>
        <p>Kota Batu memiliki keindahan tersendiri, hal itulah yang menjadi daya tarik wisatawan</p>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/cr2.jpg" class="d-block w-100"  alt="...">
      <div class="carousel-caption">
        <h5>Kota dengan wisata terbanyak</h5>
        <p>Kebanyakan orang dari daerah luar kota memilih tempat berliburnya ke Kota Batu.</p>
        <p><a href="#book" class="btn btn-warning mt-3">Selanjutnya</a></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- carausel end -->



<!-- section book start -->
<section class="book" id="book">
  <div class="container">

    <div class="main-text">
      <h1><span>P</span>esan</h1>
    </div>

    <div class="row">

      <div class="col-md-6 py-3 py-md-0">
        <div class="card">
          <img src="/img/paw.png" alt="">
        </div>
      </div>

      <div class="col-md-6 py-3 py-md-0">
        <form action="" method="get">

          <input type="date" class="form-control" placeholder="Tanggal Pesan" required><br>
          <input type="text" class="form-control" placeholder="Nama Pemesan" required><br>
          <input type="text" class="form-control" placeholder=" Nama Pesan" required><br>
          <input type="text" class="form-control" placeholder="Banyak Pesan" required><br>
          <textarea class="form-control" rows="5" name="text" placeholder="Masukkan detail pesan"></textarea><br>
          <input type="submit" value="Pesan Sekarang" class="submit" required>

        </form>
      </div>
    </div>

  </div>
</section>
<!-- section book end -->

<!-- section package start -->
<!-- <section class="package" id="package">
  <div class="container">

    <div class="main-txt">
      <h1><span>K</span>eunggulan</h1>
    </div>

    <div class="row" style="margin-top: 30px">

      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="/img/mawar.jpg" alt="">
          <div class="card-body">
            <h3>Buah-buahan</h3>
            <p>Kota Batu Membudidayakan banyak sekali buah-buahan.</p> -->
            <!-- <div class="star"> -->
              <!-- <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i> -->
              <!-- <svg class="checked" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg class="checked" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg class="checked" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
             </div> -->
            <!-- <br><br>
            <h6>Price : <strong>IDR.???</strong></h6>
            <a href="#book">Pesan Sekarang</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="/img/mawar.jpg" alt="">
          <div class="card-body">
            <h3>Tanaman Hias</h3>
            <p>Kota Batu Membudidayakan banyak sekali buah-buahan.</p>
            <div class="star"> --> 
              <!-- <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i> -->
              <!-- <svg class="checked" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg class="checked" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg class="checked" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
            </div>
            <br><br>
            <h6>Cek Sekarang</h6>
            <a href="#book">Pesan Sekarang</a>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-md-4 py-3 py-md-0">
        <div class="card">
          <img src="/img/mawar.jpg" alt="">
          <div class="card-body">
            <h3>Buah-buahan</h3>
            <p>Kota Batu Membudidayakan banyak sekali buah-buahan.</p> -->
            <!-- <div class="star"> -->
              <!-- <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star checked"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i> -->
              <!-- <svg class="checked" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg class="checked" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg class="checked" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
              <svg  xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><style>svg{fill:#000000}</style><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
            </div>
            <br><br>
            <h6>Price : <strong>IDR.???</strong></h6>
            <a href="#book">Pesan Sekarang</a>
          </div>
        </div>
      </div>


    </div>

  </div>
</section> -->
<!-- section package end -->


<!-- portofolio section -->
<section id="kotaBatu" class="portofolio section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2 style="font-family: 'Roboto', sans-serif; text-align: center; text-shadow: 0px 1px 1px black; font-weight: 500;"><span style="color: #ffa500; font-family: 'Roboto', sans-serif;">K</span>ota Batu</h2>
          <p>Banyak sekali hal yang dapat ditemui di Kota Batu, seperti tempat wisata, buah-buahan, Bunga dan banyak sekali hal hal yang menarik lainnya</p>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-light text-center bg-dark pb-2">
          <div class="card-body text-light">
            <div class="img-area mb-4">
              <img src="/img/cr2.jpg" alt="" class="img-fluid">
            </div>
            <h3 class="card-title">Tempat Wisata</h3>
            <p class="lead">Kota Wisata Batu merupakan sebuah kota dengan wisata terbanyak,
              selain harganya terjangkau untuk kalangan remaja, Wisata di Kota Batu memiliki 
              fasilitas yang memadai, sehingga sangat rekomendasi untuk berlibur bersama dengan keluarga dan juga teman-teman.
            </p>
            <button class="btn btn-warning text-dark">Selengkapnya</button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-light text-center bg-dark pb-2">
          <div class="card-body text-light">
            <div class="img-area mb-4">
              <img src="/img/mawar.jpg" alt="" class="img-fluid">
            </div>
            <h3 class="card-title">Tanaman Hias</h3>
            <p class="lead">Selain sebagai tempat wisata, Kota Batu memiliki keunggulan dalam bidanng pertanian, Dimana ada banyak desa di Kota Batu yang 
              memiliki sebutan indah berupa "surga bunga". Banyak sekali bunga hias yang dibudidayakan, diperdagangkan dan juga sebagai koleksi. Bisa juga sebagai tempat untuk 
              mencari ilmu baru.
            </p>
            <button class="btn btn-warning text-dark">Selengkapnya</button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-4">
        <div class="card text-light text-center bg-dark pb-2">
          <div class="card-body text-light">
            <div class="img-area mb-4">
              <img src="/img/apel.jpg" alt="" class="img-fluid">
            </div>
            <h3 class="card-title">Surga Buah</h3>
            <p class="lead">Dikarenakan Kota Batu dikelilingi banyak gunung, sehingga suhu di kota batu cocok untuk pertanian, Kota Batu memproduksi banyak sekali buah.
              Buah apel yang dijadikan sebagai ikon Kota Batu. Budidaya apel ini sering menarik perhatian wiwsatawan dari dalam maupun luar daerah.
            </p>
            <button class="btn btn-warning text-dark">Selengkapnya</button>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>

<!-- portofolio end -->


<!-- services section -->
<section id="layanan" class="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-header text-center pb-5">
          <h2 style="font-family: 'Roboto', sans-serif; text-align: center; text-shadow: 0px 1px 1px black; font-weight: 500;"><span style="color: #ffa500; font-family: 'Roboto', sans-serif; ">L</span>ayanan</h2>
          <p>Selamat Datang di FunnPlay! Silahkan cari apa yang anda ingin cari</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-5 col-lg-4">
        <div class="card text-dark text-center bg-light pb-2">
          <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 640 512"><path d="M192 48c0-26.5 21.5-48 48-48H400c26.5 0 48 21.5 48 48V512H368V432c0-26.5-21.5-48-48-48s-48 21.5-48 48v80H192V48zM48 96H160V512H48c-26.5 0-48-21.5-48-48V320H80c8.8 0 16-7.2 16-16s-7.2-16-16-16H0V224H80c8.8 0 16-7.2 16-16s-7.2-16-16-16H0V144c0-26.5 21.5-48 48-48zm544 0c26.5 0 48 21.5 48 48v48H560c-8.8 0-16 7.2-16 16s7.2 16 16 16h80v64H560c-8.8 0-16 7.2-16 16s7.2 16 16 16h80V464c0 26.5-21.5 48-48 48H480V96H592zM312 64c-8.8 0-16 7.2-16 16v24H272c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h24v24c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16V152h24c8.8 0 16-7.2 16-16V120c0-8.8-7.2-16-16-16H344V80c0-8.8-7.2-16-16-16H312z"/></svg>
            <h3 class="card-title">Kesehatan</h3>
            <p>FunnPlay! Layanan Kesehatan yang ada di Kota Batu telah terjamin, sehingga para masyarakat maupun wisatawan dapat memanfaatkannya tanpa resah.</p>
            <button class="btn btn-warning">Selengkapnya</button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5 col-lg-4">
        <div class="card text-dark text-center bg-light pb-2">
          <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 448 512"><path d="M416 0C400 0 288 32 288 176V288c0 35.3 28.7 64 64 64h32V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352 240 32c0-17.7-14.3-32-32-32zM64 16C64 7.8 57.9 1 49.7 .1S34.2 4.6 32.4 12.5L2.1 148.8C.7 155.1 0 161.5 0 167.9c0 45.9 35.1 83.6 80 87.7V480c0 17.7 14.3 32 32 32s32-14.3 32-32V255.6c44.9-4.1 80-41.8 80-87.7c0-6.4-.7-12.8-2.1-19.1L191.6 12.5c-1.8-8-9.3-13.3-17.4-12.4S160 7.8 160 16V150.2c0 5.4-4.4 9.8-9.8 9.8c-5.1 0-9.3-3.9-9.8-9L127.9 14.6C127.2 6.3 120.3 0 112 0s-15.2 6.3-15.9 14.6L83.7 151c-.5 5.1-4.7 9-9.8 9c-5.4 0-9.8-4.4-9.8-9.8V16zm48.3 152l-.3 0-.3 0 .3-.7 .3 .7z"/></svg>
            <h3 class="card-title">Kuliner</h3>
            <p>FunnPlay! menyediakan banyak sekali kuliner tradisional hingga modern, mulai dari rumah makan, kaki lima, bahkan streetfood. Dan dipastikan halal dan terjamin.</p>
            <button class="btn btn-warning">Selengkapnya</button>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5 col-lg-4">
        <div class="card text-dark text-center bg-light pb-2">
          <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 640 512">><path d="M320 96C178.6 96 64 210.6 64 352v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V352C0 175.3 143.3 32 320 32s320 143.3 320 320v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V352C576 210.6 461.4 96 320 96zm0 192c-35.3 0-64 28.7-64 64v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V352c0-70.7 57.3-128 128-128s128 57.3 128 128v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V352c0-35.3-28.7-64-64-64zM160 352v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V352c0-123.7 100.3-224 224-224s224 100.3 224 224v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V352c0-88.4-71.6-160-160-160s-160 71.6-160 160z"/></svg>
            <h3 class="card-title">Hiburan</h3>
            <p>FunnPlay! Kota Batu memiliki banyak sekali taman hiburan baik untuk liburan bersama teman, keluarga dan lain lain. Tempat liburan paling asik dan paling seru!</p>
            <button class="btn btn-warning">Selengkapnya</button>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- layanan end -->

<!-- try -->

<!-- try -->




<?= $this -> endSection(); ?>