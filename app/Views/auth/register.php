<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Admin</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Registrasi Admin</h3>
                    </div>
                    <div class="card-body">
                        <?php if (session()->getFlashdata('msg')): ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif; ?>
                        <form action="/auth/register" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirm" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="password_confirm"
                                    name="password_confirm" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrasi</button>
                        </form>
                        <div class="mt-3">
                            <a href="/login">Sudah punya akun? Login di sini</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>