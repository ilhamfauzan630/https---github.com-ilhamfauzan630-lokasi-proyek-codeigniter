<!DOCTYPE html>
<html>

<head>
    <title>Daftar Lokasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Lokasi</h2>
        <a href="<?php echo site_url('lokasi/tambah'); ?>" class="btn btn-outline-primary">Tambah Lokasi</a>

        <br><br>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lokasi</th>
                    <th>Negara</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lokasi as $lk): ?>
                    <tr>
                        <td><?php echo $lk->id; ?></td>
                        <td><?php echo $lk->nama_lokasi; ?></td>
                        <td><?php echo $lk->negara; ?></td>
                        <td><?php echo $lk->provinsi; ?></td>
                        <td><?php echo $lk->kota; ?></td>
                        <td><?php echo $lk->created_at ; ?></td>
                        <td>
                            <a href="<?php echo site_url('lokasi/edit/' . $lk->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('lokasi/delete/' . $lk->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>