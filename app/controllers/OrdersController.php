<?php
// app/controllers/OrdersController.php
require_once '../app/models/Orders.php';

class OrdersController {
    private $userModel;

    public function __construct() {
        $this->userModel = new Orders();
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        require_once '../app/views/orders/index.php';

    }

    public function create() {
        $plants = $this->userModel->getAllPlants(); // Ambil data kategori
        $users = $this->userModel->getUsers(); // Ambil data Users
        require_once '../app/views/orders/create.php';
    }

    public function store() {
        $tanaman_yang_dipesan = $_POST['tanaman_yang_dipesan'];
        $pembeli = $_POST['pembeli'];
        $status_pesanan = $_POST['status_pesanan'];
        $this->userModel->add($tanaman_yang_dipesan, $pembeli, $status_pesanan);
        header('Location: /orders/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->userModel->find($id); // Assume find() gets user by ID
        $plants = $this->userModel->getAllPlants(); // Ambil data kategori
        $users = $this->userModel->getUsers(); // Ambil data Users
        require_once __DIR__ . '/../views/orders/edit.php';
    }

    public function update($id) {
        $data = [
            'id_plants' => $_POST['tanaman_yang_dipesan'], 
            'id_users' => $_POST['pembeli'],
            'status_pesanan' => $_POST['status_pesanan'],
        ];

        $updated = $this->userModel->update($id, $data);
        if ($updated) {
            header("Location: /orders/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process the update request
    // public function update($id, $data) {
    //     $updated = $this->userModel->update($id, $data);
    //     if ($updated) {
    //         header("Location: /orders/index"); // Redirect to user list
    //     } else {
    //         echo "Failed to update user.";
    //     }
    // }

    // Process delete request
    public function delete($id) {
        $deleted = $this->userModel->delete($id);
        if ($deleted) {
            header("Location: /orders/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }

}
