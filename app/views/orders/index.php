<!-- app/views/orders/index.php -->
<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>

<h2 style="text-align: center; margin: 20px">Daftar Pesanan</h2>
<div class="container" style="margin-top: 40px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tabel Daftar Pesanan</div>
                    <div class="card-body">
                    <a href="/orders/create" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah Pemesan Baru</a>
                    <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Tanaman Yang Dipesan</th>
                                    <th scope="col">Pembeli</th>
                                    <th scope="col">Status Pesanan</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach ($users as $user): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= htmlspecialchars($user['tanaman_yang_dipesan']) ?></td>
                                        <td><?= htmlspecialchars($user['pembeli']) ?></td>
                                        <td><?= htmlspecialchars($user['status_pesanan']) ?></td>
                                        <td class="text-center">
                                            <a href="/orders/edit/<?php echo $user['id_orders']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="/orders/delete/<?php echo $user['id_orders']; ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
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
