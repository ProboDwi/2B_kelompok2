<!-- app/views/user/create.php -->
<?php require_once '../public/library/header.php'; ?>
<?php require_once '../public/library/navbar.php'; ?>


<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Tambah Kategori Baru</div>
                    <div class="card-body">
                        <form action="/categories/store" method="POST">

                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                            </div><br>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                            <a class="btn btn-primary" href="/categories/index" role="button">KEMBALI</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once '../public/library/footer.php'; ?>