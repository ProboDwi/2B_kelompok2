<?php
// app/controllers/CategoriesController.php
require_once '../app/models/Categories.php';

class CategoriesController {
    private $userModel;

    public function __construct() {
        $this->userModel = new Categories();
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        require_once '../app/views/categories/index.php';

    }

    public function create() {
        require_once '../app/views/categories/create.php';
    }

    public function store() {
        $nama_kategori = $_POST['nama_kategori'];
        $deskripsi = $_POST['deskripsi'];
        $this->userModel->add($nama_kategori, $deskripsi);
        header('Location: /categories/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->userModel->find($id); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/categories/edit.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->userModel->update($id, $data);
        if ($updated) {
            header("Location: /categories/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id) {
        $deleted = $this->userModel->delete($id);
        if ($deleted) {
            header("Location: /categories/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}