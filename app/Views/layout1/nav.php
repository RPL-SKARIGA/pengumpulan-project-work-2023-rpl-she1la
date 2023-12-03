<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- start -->
<div class="header">
    <div class="nav_bar-top">
        <div class="container-fluid">
            <div class="text-container">
                <div class="text-content">
                    <p class="para-text"><span class="span_text"><i class="fa-brands fa-instagram"></i></span>sheiladsya
                    </p>
                </div>

                <div class="social-links">
                    <i class="fa-brands icon-social fa-square-instagram"></i>
                    <i class="fa-brands icon-social fa-square-whatsapp"></i>
                    <i class="fa-solid icon-social fa-phone-flip"></i>
                    <i class="fa-brands icon-social fa-telegram"></i>
                    <i class="fa-solid icon-social fa-envelope"></i>
                </div>

                <!-- navbar bootstrap -->
                <div class="navbar-container">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <h3 class="heading-logo">Funn<span>Play</span></h3>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarScroll">
                                <ul class="navbar-nav ms-auto" style="--bs-scroll-height: 100px;">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Home</a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#packages">packages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/Galeri/galeri">Galeri</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                          <a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
                                      </li> -->
                                </ul>
                            </div>
                            <div class="dropdown show">
                                <?php
                                if (session()->get('statusLogin') == true) {
                                ?>
                                <div class="nav-item dropdown">
                                    <button class="nav-link" type="button" data-toggle="dropdown"
                                        aria-expanded="false"><?= session()->get('nama') ?></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item"
                                            href="<?php echo base_url('login/logout') ?>">Logout</a>
                                    </div>
                                </div>
                                <?php
                                } else {
                                ?>
                                <div class="nav-item dropdown">
                                    <button class="nav-link" type="button" data-toggle="dropdown"
                                        aria-expanded="false">Masuk</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo base_url('login') ?>">Masuk</a>
                                        <a class="dropdown-item" href="<?php echo base_url('register') ?>">Daftar</a>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- navbar end -->

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- nav-bar top finished  -->