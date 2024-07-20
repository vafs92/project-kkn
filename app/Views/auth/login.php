<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <a href="/">
                                            <img src="/assets/img/logo new.png" style="width: 185px;" alt="logo">
                                        </a>
                                        <h4 class="mt-1 mb-5 pb-1">Kerukunan Brayat Bungmanis</h4>
                                    </div>

                                    <form action="/auth/process" method="post">
                                        <?= csrf_field() ?>
                                        <p>Please login to your account</p>

                                        <?php if (session()->getFlashdata('msg')): ?>
                                            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                        <?php endif; ?>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="username" name="username" class="form-control"
                                                placeholder="" required />
                                            <label class="form-label" for="username">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="password" class="form-control"
                                                required />
                                            <label class="form-label" for="password">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Log in</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a href="/register" class="btn btn-outline-danger">Create new</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Oase Bungmanis</h4>
                                    <p class="small mb-0">Padukuhan Bungmanis adalah salah satu Padukuhan yang ada di
                                        Kalurahan Pucanganom, Kapanewon Rongkop, Kabupaten Gunungkidul, Daerah Istimewa
                                        Yogyakarta.Padukuhan Bungmanis terletak di sebelah timur dari pusat pemerintahan
                                        Kalurahan Pucanganom dengan jarak 1,5 Km.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>