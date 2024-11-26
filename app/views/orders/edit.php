<!-- app/views/orders/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Pesanan</title>
</head>
<body>
    <h2>Edit Pesanan</h2>
    <form action="/orders/update/<?php echo $user['id_orders']; ?>" method="POST">
        <label for="tanaman_yang_dipesan">Tanaman Yang Dipesan:</label>
        <input type="text" id="tanaman_yang_dipesan" name="tanaman_yang_dipesan" value="<?php echo $user['tanaman_yang_dipesan']; ?>" required>
        <br>
        <label for="pembeli">Pembeli:</label>
        <input type="text" id="pembeli" name="pembeli" value="<?php echo $user['pembeli']; ?>" required>
        <br>
        <label for="status_pesanan">Status Pesanan:</label>
        <input type="text" id="status_pesanan" name="status_pesanan" value="<?php echo $user['status_pesanan']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/orders/index">Back to List</a>
</body>
</html>