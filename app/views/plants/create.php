<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Tambah Tanaman Baru</div>
                <div class="card-body">
                    <form action="/plants/store" method="POST">

                        <div class="form-group">
                            <label for="nama_tanaman">Nama Tanaman</label>
                            <input type="text" name="nama_tanaman" id="nama_tanaman" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                                <div>
                                    <select id="kategori" name="kategori" style="width: 100%" required>
                                    <option value="" selected disabled>Pilih Kategori</option>

                                        <?php foreach ($kategori as $data): ?>
                                            <option value="<?= htmlspecialchars($data['id_categories']) ?>">
                                                <?= htmlspecialchars($data['nama_kategori']) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select><br><br>
                                </div>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" step="0.01" name="harga" id="harga" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="penjual">Penjual</label>
                            <input type="text" name="penjual" id="penjual" class="form-control" required>
                        </div><br>

                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <button type="reset" class="btn btn-warning">RESET</button>
                        <a class="btn btn-primary" href="/plants/index" role="button">KEMBALI</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../public/library/footer.php'; ?>
