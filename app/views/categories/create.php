<!-- app/views/user/create.php -->
<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<h2>Tambah kategori Baru</h2>
<form action="/categories/store" method="POST">
    <label for="nama_kategori">Nama Kategori:</label><br>
    <input type="text" name="nama_kategori" id="nama_kategori" required><br>
    <label for="deskripsi">Deskripsi:</label><br>
    <input type="text" name="deskripsi" id="deskripsi" required><br>
    <button type="submit">Simpan</button>
</form>

<?php require_once '../public/library/footer.php'; ?>