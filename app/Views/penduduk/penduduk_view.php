<!DOCTYPE html>
<html>

<head>
  <title>Data Penduduk</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Style tambahan jika diperlukan */
    body {
      padding: 20px;
    }
  </style>
</head>

<body>

  <h2>Data Penduduk</h2>

  <div class="container">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Umur</th>
          <th scope="col">Pekerjaan</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($penduduk) && is_array($penduduk)): ?>
          <?php foreach ($penduduk as $item): ?>
            <tr>
              <td><?= esc($item['nama']); ?></td>
              <td><?= esc($item['alamat']); ?></td>
              <td><?= esc($item['umur']); ?></td>
              <td><?= esc($item['pekerjaan']); ?></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="4">Tidak ada data</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS, Optional -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>