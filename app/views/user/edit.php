<!-- app/views/user/edit.php -->
 <?php require_once '../public/library/header.php'; ?>
 <?php require_once '../public/library/navbar.php'; ?>


 <div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Edit Pengguna</div>
                    <div class="card-body">
                        <form action="/user/update/<?php echo $user['id_users']; ?>" method="POST">

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" value="<?php echo $user['nama']; ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" value="<?php echo $user['password']; ?>" id="password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" value="<?php echo $user['alamat']; ?>" class="form-control" required>
                            </div><br>

                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <a class="btn btn-primary" href="/user/index" role="button">KEMBALI</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once '../public/library/footer.php'; ?>