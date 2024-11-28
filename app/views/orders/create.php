<!-- app/views/orders/create.php -->
<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Tambah Pesanan Baru</div>
                    <div class="card-body">
                        <form action="/orders/store" method="POST">

                            <div class="form-group">
                                <label for="tanaman_yang_dipesan">Tanaman Yang Dipesan</label>
                                <div>
                                    <select id="select" name="tanaman_yang_dipesan" style="width: 100%" required>
                                    <option value="" selected disabled>Pilih Tanaman</option>

                                        <?php foreach ($plants as $data): ?>
                                            <option value="<?= htmlspecialchars($data['id_plants']) ?>">
                                                <?= htmlspecialchars($data['nama_tanaman']) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select><br><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pembeli">Pembeli</label>
                                <div>
                                    <select id="select1" name="pembeli" style="width: 100%" required>
                                    <option value="" selected disabled>Pilih Pembeli</option>

                                        <?php foreach ($users as $data): ?>
                                            <option value="<?= htmlspecialchars($data['id_users']) ?>">
                                                <?= htmlspecialchars($data['nama']) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select><br><br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="status_pesanan">Status Pesanan</label>
                                <input type="text" name="status_pesanan" id="status_pesanan" class="form-control" required>
                            </div><br>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                            <a class="btn btn-primary" href="/orders/index" role="button">KEMBALI</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once '../public/library/footer.php'; ?>
