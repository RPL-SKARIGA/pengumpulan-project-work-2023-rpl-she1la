<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login|FunnPlay </title>
    <link rel="stylesheet" href="/css/logincss.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form  id="login" method="POST" class="user" action="<?= base_url('Login/proses') ?>">
                <h1>Login</h1>
                <hr>
                <p>Selamat Datang di FunnPlay</p>

                <div class="form-group">
                    <label for="email" class="text-info">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password" class="text-info">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block" name="login">Login</button>
                <p>
                    <a href="">Lupa password?</a> |<a href="<?php echo base_url('register') ?>">Register</a>
                </p>

            </form>
        </div>

        <div class="right">
            <img src="../img/meng.jpg" alt="">
        </div>
    </div>

    <script type="text/javascript">
    $('#login').submit(function(e) {
        e.preventDefault();
        var form = $('#login').serialize();
        $.ajax({
            url: '<?= base_url("login/proses") ?>',
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
                        title: '&nbsp; &nbsp; login Data Berhasil'
                    })

                    setTimeout(() => {
                        window.location.href = '<?= base_url('home') ?>';
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