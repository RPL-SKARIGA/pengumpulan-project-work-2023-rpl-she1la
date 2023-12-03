<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <!-- style css -->
  <link rel="stylesheet" href="/css/media.css">
  <link rel="stylesheet" href="/css/admin/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Roboto:wght@500&display=swap" rel="stylesheet">
  <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>

</head> 
<body>

    <div class="wrapper">
        <aside id="sidebar">
            <!-- Content for sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">FunnPlay</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin Elemnts
                    </li>

                    <li class="sidebar-item">
                        <a href="/admin/dashboard" class="sidebar-link">
                            <i class="fa-solid fa-list"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/admin/wisata" class="sidebar-link">
                            <i class="fa-solid fa-rainbow"></i>
                            Wisata
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="/User/user" class="sidebar-link">
                            <i class="fa-solid fa-users"></i>
                            User
                        </a>
                    </li>

                    <!-- <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Logout
                        </a>
                    </li> -->

                    <!-- <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapse" data-bs-target="#pages" data-bs-toggle="collapse" 
                            aria-expanded="false"><i class="fa-solid fa-file pe-2"></i>
                            Pages
                        </a>
                    </li> -->

                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar-expand px-3 border-bottom">
                <div class="navbar-collapse navbar">
                    <button class="btn" id="sidebar-toggle" type="button">
                        <i class="fas fa-list fe-2"></i>
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <p class="text-white"><?= session()->get('username'); ?></p>
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">

                                <img src="/img/user1.png" alt="" class="avatar img-fluid-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="<?= base_url('A_Login/logout') ?>" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h2>Dashboard FunnPlay </h2>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 2-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin</h4>
                                                <p class="mb-0">Admin Dashboard FunnPlay</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="/img/meng.jpg" alt="" class="img-fluid illustration-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                $ 78.00
                                            </h4>
                                            <p class="mb-2">
                                                Total earnings
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                    +9.0%
                                                </span>
                                                <span class="text-muted">
                                                    Since Last Month
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                    <!-- </div> -->

                    <!-- table Elemets -->
                    <!-- <div class="row"> -->
                        <div class="col-12 col-md-4 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 2-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Jasa</h4>
                                                <h2 class="mb-0"><?= $Tjasa; ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="/img/meng2.jpg" alt="" class="img-fluid illustration-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 2-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Pengguna</h4>
                                                <h2 class="mb-0"><?= $Tuser; ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="/img/meng3.jpg" alt="" class="img-fluid illustration-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </main>

            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-sun"></i>
                <i class="fa-regular fa-moon"></i>
            </a>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>FunnPlay</strong>
                                </a>
                            </p>
                        </div>

                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </footer>

        </div>
    </div>

    <script src="<?= base_url('./js/script.js'); ?>"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

<!-- pw : Syandan4! -->