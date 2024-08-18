<!DOCTYPE html>
<html>

<head>
    <title>Daftar Proyek Lokasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Proyek Lokasi</h2>

        <a href="<?php echo site_url('proyek'); ?>" class="btn btn-outline-primary">Lihat Daftar Proyek</a>
        <a href="<?php echo site_url('lokasi'); ?>" class="btn btn-outline-primary">Lihat Daftar Lokasi</a>

        <br><br>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Proyek</th>
                    <th>Client</th>
                    <th>Pimpinan Proyek</th>
                    <th>Nama Lokasi</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Selesai</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyeklokasi as $pl): ?>
                    <tr>
                        <td><?php echo $pl->id; ?></td>
                        <td><?php echo $pl->nama_proyek; ?></td>
                        <td><?php echo $pl->client; ?></td>
                        <td><?php echo $pl->pimpinan_proyek; ?></td>
                        <td><?php echo $pl->nama_lokasi; ?></td>
                        <td><?php echo $pl->tgl_mulai; ?></td>
                        <td><?php echo $pl->tgl_selesai; ?></td>
                        <td><?php echo $pl->keterangan; ?></td>
                        <td>
                            <a href="<?php echo site_url('proyeklokasi/edit/' . $pl->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('proyeklokasi/delete/' . $pl->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>