<!DOCTYPE html>
<html>

<head>
    <title>Tambah ProyekLokasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="<?= site_url('proyeklokasi') ?>" class="btn btn-secondary" style="margin-left: 20px; margin-top:20px" ;>Kembali</a>
    <?php echo validation_errors(); ?>
    <div class="container mt-5">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Tambah ProyekLokasi</h5>
                <form action="<?= site_url('proyeklokasi/kirim') ?>" method="post">
                    <div class="mb-3">
                        <label for="proyek_id" class="form-label">Pilih Proyek</label>
                        <select class="form-control" id="proyek_id" name="proyek_id" required>
                            <option value="" disabled selected>Pilih Proyek</option>
                            <?php foreach ($proyek as $p): ?>
                                <option value="<?= $p->id ?>"><?= $p->nama_proyek ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi_id" class="form-label">Pilih Lokasi</label>
                        <select class="form-control" id="lokasi_id" name="lokasi_id" required>
                            <option value="" disabled selected>Pilih Lokasi</option>
                            <?php foreach ($lokasi as $l): ?>
                                <option value="<?= $l->id ?>"><?= $l->nama_lokasi ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="<?= site_url('proyeklokasi') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>