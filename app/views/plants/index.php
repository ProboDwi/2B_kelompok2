<!-- app/views/user/index.php -->
<h2>Daftar Tanaman</h2>
<a href="/plants/create">Tambah Tanaman Baru</a>
<ul>
    <?php foreach ($users as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['nama_tanaman']) ?> - 
            <?= htmlspecialchars($user['kategori']) ?> - 
            <?= htmlspecialchars($user['deskripsi']) ?> - 
            <?= htmlspecialchars($user['harga']) ?> - 
            <?= htmlspecialchars($user['penjual']) ?>
            <a href="/plants/edit/<?php echo $user['id_plants']; ?>">Edit</a> |
            <a href="/plants/delete/<?php echo $user['id_plants']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
