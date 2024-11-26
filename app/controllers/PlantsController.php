<?php
// app/controllers/UserController.php
require_once '../app/models/Plants.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        require_once '../app/views/user/index.php';

    }

    public function create() {
        require_once '../app/views/user/create.php';
    }

    public function store() {
        $nama_tanaman = $_POST['nama_tanaman'];
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $penjual = $_POST['penjual'];
        $this->userModel->add($nama_tanaman, $kategori, $deskripsi, $harga, $penjual);
        header('Location: /user/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->userModel->find($id); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/user/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->userModel->update($id, $data);
        if ($updated) {
            header("Location: /user/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->userModel->delete($id);
        if ($deleted) {
            header("Location: /user/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}
