<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Edit Tanaman</div>
                <div class="card-body">
                    <form action="/plants/update/<?php echo $user['id_plants']; ?>" method="POST">

                        <div class="form-group">
                            <label for="nama_tanaman">Nama Tanaman</label>
                            <input type="text" name="nama_tanaman" id="nama_tanaman" value="<?php echo htmlspecialchars($user['nama_tanaman']); ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" id="kategori" value="<?php echo htmlspecialchars($user['kategori']); ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" id="deskripsi" value="<?php echo htmlspecialchars($user['deskripsi']); ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" step="0.01" name="harga" id="harga" value="<?php echo htmlspecialchars($user['harga']); ?>" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="penjual">Penjual</label>
                            <input type="text" name="penjual" id="penjual" value="<?php echo htmlspecialchars($user['penjual']); ?>" class="form-control" required>
                        </div><br>

                        <button type="submit" class="btn btn-success">UPDATE</button>
                        <a class="btn btn-primary" href="/plants/index" role="button">KEMBALI</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../public/library/footer.php'; ?>
