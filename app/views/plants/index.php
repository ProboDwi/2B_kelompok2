<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<h2 style="text-align: center; margin: 20px">Daftar Tanaman</h2>
<div class="container" style="margin-top: 40px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tabel Daftar Tanaman</div>
                <div class="card-body">
                    <a href="/plants/create" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah Tanaman Baru</a>
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Tanaman</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Penjual</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if (!empty($users)) {
                                $no = 1;
                                foreach ($users as $user): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= htmlspecialchars($user['nama_tanaman']); ?></td>
                                        <td><?= htmlspecialchars($user['kategori']); ?></td>
                                        <td><?= htmlspecialchars($user['deskripsi']); ?></td>
                                        <td><?= htmlspecialchars($user['harga']); ?></td>
                                        <td><?= htmlspecialchars($user['penjual']); ?></td>
                                        <td class="text-center">
                                            <a href="/plants/edit/<?php echo $user['id_plants']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/plants/delete/<?php echo $user['id_plants']; ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data tanaman</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../public/library/footer.php'; ?>
