<!-- app/views/user/index.php -->
<h2>Daftar Tanaman</h2>
<a href="/user/create">Tambah Tanaman Baru</a>
<ul>
    <?php foreach ($users as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['nama_tanaman']) ?> - 
            <?= htmlspecialchars($user['kategori']) ?> - 
            <?= htmlspecialchars($user['deskripsi']) ?> - 
            <?= htmlspecialchars($user['harga']) ?> - 
            <?= htmlspecialchars($user['penjual']) ?>
            <a href="/user/edit/<?php echo $user['id_plants']; ?>">Edit</a> |
            <a href="/user/delete/<?php echo $user['id_plants']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
