<!-- app/views/user/index.php -->
<h2>Daftar Kategori</h2>
<a href="/categories/create">Tambah Kategori</a>
<ul>
    <?php foreach ($users as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['nama_kategori']) ?> - <?= htmlspecialchars($user['deskripsi']) ?>
            <a href="/categories/edit/<?php echo $user['id_categories']; ?>">Edit</a> |
            <a href="/categories/delete/<?php echo $user['id_categories']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>