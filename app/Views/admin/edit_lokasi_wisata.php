<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lokasi Wisata - Admin Dashboard</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Edit Lokasi Wisata</h2>
        <form action="/admin/updateWisata/<?= esc($wisata['id']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($wisata['nama']); ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= esc($wisata['deskripsi']); ?></textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= esc($wisata['alamat']); ?>" required>
            </div>
            <div class="form-group">
                <label for="gambar">Gambar:</label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
                <?php if (!empty($wisata['gambar'])): ?>
                        <div class="mt-2">
                            <img src="<?= base_url('uploads/' . esc($wisata['gambar'])); ?>" alt="Gambar Lokasi Wisata" width="150">
                        </div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>

    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
