<?php
// app/controllers/UserController.php
require_once '../app/models/Plants.php';

class PlantsController {
    private $userModel;

    public function __construct() {
        $this->userModel = new Plants();
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        require_once '../app/views/plants/index.php';

    }

    public function create() {
        $kategori = $this->userModel->getAllCategories();
        require_once '../app/views/plants/create.php';
    }

    public function store() {
        $nama_tanaman = $_POST['nama_tanaman'];
        $kategori = $_POST['kategori'];
        $harga = $_POST['harga'];
        $penjual = $_POST['penjual'];
        $this->userModel->add($nama_tanaman, $kategori, $harga, $penjual);
        header('Location: /plants/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->userModel->find($id); // Assume find() gets user by ID
        $kategori = $this->userModel->getAllCategories();
        require_once __DIR__ . '/../views/plants/edit.php';
    }

    public function update($id) {
        $data = [
            'nama_tanaman' => $_POST['nama_tanaman'],
            'id_categories' => $_POST['kategori'],
            'harga' => $_POST['harga'],
            'penjual' => $_POST['penjual'],
        ];
    
        $updated = $this->userModel->update($id, $data);
        if ($updated) {
            header("Location: /plants/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process the update request
    // public function update($id, $data) {
    //     $updated = $this->userModel->update($id, $data);
    //     if ($updated) {
    //         header("Location: /plants/index"); // Redirect to user list
    //     } else {
    //         echo "Failed to update user.";
    //     }
    // }

    // Process delete request
    public function delete($id) {
        $deleted = $this->userModel->delete($id);
        if ($deleted) {
            header("Location: /plants/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}
