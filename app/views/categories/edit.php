<!-- app/views/user/edit.php -->
<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit kategori</title>
</head>
<body>
    <h2>Edit kategori</h2>
    <form action="/categories/update/<?php echo $user['id_categories']; ?>" method="POST">
        <label for="nama_kategori">Nama Kategori:</label>
        <input type="text" id="nama_kategori" name="nama_kategori" value="<?php echo $user['nama_kategori']; ?>" required>
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $user['deskripsi']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/categories/index">Back to List</a>
</body>
</html>

<?php require_once '../public/library/footer.php'; ?>