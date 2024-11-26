<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit Tanaman</h2>
    <form action="/user/update/<?php echo $user['id_plants']; ?>" method="POST">
        <label for="nama_tanaman">Nama Tanaman:</label>
        <input type="varchar" id="nama_tanaman" name="nama_tanaman" value="<?php echo $user['nama_tanaman']; ?>" required>
        <br>
        <label for="kategori">Kategori:</label>
        <input type="varchar" id="kategori" name="kategori" value="<?php echo $user['kategori']; ?>" required>
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $user['deskripsi']; ?>" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="decimal" id="harga" name="harga" value="<?php echo $user['harga']; ?>" required>
        <br>
        <label for="penjual">Penjual:</label>
        <input type="varchar" id="penjual" name="penjual" value="<?php echo $user['penjual']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/user/index">Back to List</a>
</body>
</html>