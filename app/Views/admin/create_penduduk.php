<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Penduduk</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Tambah Data Penduduk</h2>
        <form action="/admin/store" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="RT" class="form-label">RT</label>
                <input type="text" class="form-control" id="RT" name="RT" required>
            </div>
            <div class="mb-3">
                <label for="RW" class="form-label">RW</label>
                <input type="text" class="form-control" id="RW" name="RW" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="text" class="form-control" id="umur" name="umur" required>
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>