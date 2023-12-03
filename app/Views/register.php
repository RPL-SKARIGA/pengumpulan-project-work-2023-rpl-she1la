<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|FunnPlay </title>
    <link rel="stylesheet" href="/css/logincss.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="left">
            <img src="../img/meng3.jpg" alt="">
        </div>
        <div class="login">
            <form id="register" method="post">
                <h1>Register</h1>
                <hr>
                <p>Selamat Datang di FunnPlay</p>
                <div class="form-group">
                    <label class="text-info">Nama:</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="text-info">Telepon:</label>
                    <input type="number" name="telepon" id="telepon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="text-info">NIK:</label>
                    <input type="number" name="nik" id="nik" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="text-info">Usia:</label>
                    <input type="number" name="usia" id="usia" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="text-info">Alamat:</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="text-info">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label class="text-info">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info" id="btn_add">Submit</button>
                </div>
            </form>
        </div>

    </div>

    <script type="text/javascript">
    $('#register').submit(function(e) {
        e.preventDefault();
        var form = $('#register').serialize();
        $.ajax({
            url: '<?= base_url("Register/tambah_aksi") ?>',
            type: 'post',
            dataType: 'json',
            data: form,
            success: function(res) {
                // console.log(res);
                if (res.success == 0) {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })

                    Toast.fire({
                        icon: 'success',
                        title: '&nbsp; &nbsp; Register Data Berhasil'
                    })

                    setTimeout(() => {
                        window.location.href = '<?= base_url('login') ?>';
                    }, 1500);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        })
    })
    </script>
</body>

</html>