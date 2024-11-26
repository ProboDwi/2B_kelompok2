<!-- app/views/orders/index.php -->
<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<h2>Daftar Pesanan</h2>
<a href="/orders/create">Tambah Pemesan</a>
<ul>
    <?php foreach ($users as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['tanaman_yang_dipesan']) ?> - <?= htmlspecialchars($user['pembeli']) ?> - <?= htmlspecialchars($user['status_pesanan']) ?>
            <a href="/orders/edit/<?php echo $user['id_orders']; ?>">Edit</a> |
            <a href="/orders/delete/<?php echo $user['id_orders']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>

<?php require_once '../public/library/footer.php'; ?>