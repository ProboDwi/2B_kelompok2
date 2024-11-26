<!-- app/views/user/create.php -->
<h2>Tambah Tanaman Baru</h2>
<form action="/user/store" method="POST">
    <label for="nama_tanaman">Nama Tanaman:</label>
    <input type="varchar" name="nama_tanaman" id="nama_tanaman" required>
    <br>
    <label for="kategori">Kategori:</label>
    <input type="varchar" name="kategori" id="kategori" required>
    <br>
    <label for="deskripsi">Deskripsi:</label>
    <input type="text" name="deskripsi" id="deskripsi" required>
    <br>
    <label for="harga">Harga:</label>
    <input type="decimal" name="harga" id="harga" required>
    <br>
    <label for="penjual">Penjual:</label>
    <input type="varchar" name="penjual" id="penjual" required>
    <br>
    <button type="submit">Simpan</button>
</form>
