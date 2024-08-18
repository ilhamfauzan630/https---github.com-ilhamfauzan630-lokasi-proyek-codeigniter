<!DOCTYPE html>
<html>

<head>
    <title>Edit Proyek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="<?= site_url('proyek') ?>" class="btn btn-secondary" style="margin-left: 20px; margin-top:20px" ;>Kembali</a>
    <?php echo validation_errors(); ?>
    <div class="container">
        <div class="card mx-auto" style="width: 50%;">
            <div class="card-body">
                <h3 class="card-title">Edit Proyek</h3>
                <form action="<?= site_url('proyek/update/' . $proyek->id) ?>" method="post">
                    <div class="mb-3">
                        <label for="nama_proyek" class="form-label">Nama Proyek</label>
                        <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" value="<?= $proyek->nama_proyek ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="client" class="form-label">Client</label>
                        <input type="text" class="form-control" id="client" name="client" value="<?= $proyek->client ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" value="<?= $proyek->tgl_mulai ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" value="<?= $proyek->tgl_selesai ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="pimpinan_proyek" class="form-label">Pimpinan Proyek</label>
                        <input type="text" class="form-control" id="pimpinan_proyek" name="pimpinan_proyek" value="<?= $proyek->pimpinan_proyek ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" required><?= $proyek->keterangan ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= site_url('proyek') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>