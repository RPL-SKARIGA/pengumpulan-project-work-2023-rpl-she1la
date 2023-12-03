<?= $this-> extend('layoutAdmin/tempAdmin2.php'); ?>

<?= $this ->section('admin'); ?>

<section>
    <div class="container flex">
        <div class="left">

            <div class="main_image">
                <img src="/img/bunga.jng" alt="" class="slide">
            </div>

            <div class="option flex">
                <img src="/img/meng.jpg" onclick="img('img/meng.jpg')">
                <img src="/img/meng2.jpg" onclick="img('img/meng2.jpg')">
                <img src="/img/meng3.jpg" onclick="img('img/meng3.jpg')">
                <img src="/img/mengno.png" onclick="img('img/mengno.png')">
            </div>

        </div>

        <div class="right">
            <h3>Jatim Park 3</h3>
            <h4><small>Rp</small>130.000</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Consectetur mollitia, incidunt quisquam quod, ratione harum
                dolor obcaecati doloribus nemo placeat minus architecto illum, 
                soluta ex aspernatur amet omnis! Beatae, sed.
            </p>
            <h5>Tiket</h5>
            <div class="tiket flex1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <h5>Qty</h5>
            <div class="add flex1">
                <span>-</span>
                <label for="">1</label>
                <span>+</span>
            </div>
            <button>Keranjang</button>
        </div>


    </div>
</section>

<?= $this->endSection(); ?> 