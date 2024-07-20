<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk - Admin Dashboard</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .table-scroll {
            max-height: 500px;
            overflow-y: auto;
            display: block;
        }

        .table {
            width: 100%;
            table-layout: fixed;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .main-content h2 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="/admin">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/admin/create">Tambah Data</a>
            </li>
            <!-- Add more sidebar items as needed -->
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/auth/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container mt-4">
            <h2>Data Penduduk</h2>
            <div class="table-scroll">
                <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">RT</th>
                        <th scope="col">RW</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($penduduk) && is_array($penduduk)): ?>
                        <?php foreach ($penduduk as $item): ?>
                            <tr>
                                <td><?= esc($item['nama']); ?></td>
                                <td><?= esc($item['RT']); ?></td>
                                <td><?= esc($item['RW']); ?></td>
                                <td><?= esc($item['umur']); ?></td>
                                <td><?= esc($item['pekerjaan']); ?></td>
                                <td><?= esc($item['jenis_kelamin']); ?></td>
                                <td>
                                    <a href="/admin/edit/<?= esc($item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="/admin/delete/<?= esc($item['id']); ?>" method="post"
                                        style="display:inline-block;">
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7">Tidak ada data</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            </div>
        </div>

        <div class="container mt-4">
            <h2>Data Artikel</h2>
            <div class="table-scroll">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Penulis</th>
                            <th scope="col">Tanggal Penulisan</th>
                            <th scope="col">Judul Artikel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($artikel) && is_array($artikel)) : ?>
                            <?php foreach ($artikel as $item) : ?>
                                <tr>
                                    <td><?= esc($item['penulis']); ?></td>
                                    <td><?= esc($item['tgl_tulis']); ?></td>
                                    <td><?= esc($item['judul']); ?></td>
                                    <td>
                                        <a href="/admin/edit_artikel/<?= esc($item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="/admin/delete_artikel/<?= esc($item['id']); ?>" method="post" style="display:inline-block;">
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="7">Tidak ada data</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
