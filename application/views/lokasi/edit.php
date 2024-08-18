<!DOCTYPE html>
<html>

<head>
    <title>Edit Lokasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="<?= site_url('lokasi') ?>" class="btn btn-secondary" style="margin-left: 20px; margin-top:20px" ;>Kembali</a>

    <?php echo validation_errors(); ?>
    <div class="container">
        <div class="card mx-auto" style="width: 50%;">
            <div class="card-body">
                <h3 class="card-title">Edit Lokasi</h3>
                <form action="<?= site_url('lokasi/update/' . $lokasi->id) ?>" method="post">
                    <div class="mb-3">
                        <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
                        <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" value="<?= $lokasi->nama_lokasi ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="negara" class="form-label">Negara</label>
                        <input type="text" class="form-control" id="negara" name="negara" value="<?= $lokasi->negara ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $lokasi->provinsi ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" value="<?= $lokasi->kota ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= site_url('lokasi') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>


    <br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>