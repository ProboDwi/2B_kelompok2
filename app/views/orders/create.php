<!-- app/views/orders/create.php -->
<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<h2>Tambah Pesanan Baru</h2>
<form action="/orders/store" method="POST">
    <label for="tanaman_yang_dipesan">Tanaman Yang Dipesan:</label>
    <input type="text" name="tanaman_yang_dipesan" id="tanaman_yang_dipesan" required>
    <label for="pembeli">Pembeli:</label>
    <input type="text" name="pembeli" id="pembeli" required>
    <label for="status_pesanan">Status Pesanan:</label>
    <input type="text" name="status_pesanan" id="status_pesanan" required>
    <button type="submit">Simpan</button>
</form>

<?php require_once '../public/library/footer.php'; ?>