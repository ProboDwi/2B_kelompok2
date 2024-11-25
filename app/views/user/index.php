<!-- app/views/user/index.php -->
<h2>Daftar Pengguna</h2>
<a href="/user/create">Tambah Pengguna Baru</a>
<ul>
    <?php foreach ($users as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['nama']) ?> - <?= htmlspecialchars($user['email']) ?> - <?= htmlspecialchars($user['alamat']) ?>
            <a href="/user/edit/<?php echo $user['id_users']; ?>">Edit</a> |
            <a href="/user/delete/<?php echo $user['id_users']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
