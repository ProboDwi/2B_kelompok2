<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<h2 style="text-align: center; margin: 20px">Daftar Pengguna</h2>
<div class="container" style="margin-top: 40px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tabel Daftar Pengguna</div>
                    <div class="card-body">
                        <a href="/user/create" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah Pengguna Baru</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($users as $user): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= htmlspecialchars($user['nama']) ?></td>
                                        <td><?= htmlspecialchars($user['email']) ?></td>
                                        <td><?= htmlspecialchars($user['alamat']) ?></td>
                                        <td class="text-center">
                                            <a href="/user/edit/<?php echo $user['id_users']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/user/delete/<?php echo $user['id_users']; ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


<?php require_once '../public/library/footer.php'; ?>