<!DOCTYPE html>
<html>

<head>
    <title>Daftar Proyek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Proyek</h2>
        <a href="<?php echo site_url('proyek/tambah'); ?>" class="btn btn-outline-primary">Tambah Proyek</a>

        <br><br>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Proyek</th>
                    <th>Client</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Pimpinan Proyek</th>
                    <th>Keterangan</th>
                    <th>Created At</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyek as $pk): ?>
                    <tr>
                        <td><?php echo $pk->id; ?></td>
                        <td><?php echo $pk->nama_proyek; ?></td>
                        <td><?php echo $pk->client; ?></td>
                        <td><?php echo $pk->tgl_mulai; ?></td>
                        <td><?php echo $pk->tgl_selesai; ?></td>
                        <td><?php echo $pk->pimpinan_proyek; ?></td>
                        <td><?php echo $pk->keterangan; ?></td>
                        <td><?php echo $pk->created_at; ?></td>
                        <td>
                            <a href="<?php echo site_url('proyek/edit/' . $pk->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('proyek/delete/' . $pk->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>