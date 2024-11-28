<?php
// app/models/Orders.php
require_once '../config/database.php';

class Orders {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM orders JOIN plants, users where orders.id_plants = plants.id_plants AND orders.id_users = users.id_users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // method untuk mengambil data plants
    public function getAllPlants() {
        $query = $this->db->query("SELECT * FROM plants");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // method untuk mengambil data users
    public function getUsers() {
        $query = $this->db->query("SELECT * FROM users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM orders JOIN plants, users WHERE id_orders = :id AND orders.id_plants = plants.id_plants AND orders.id_users = users.id_users");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($tanaman_yang_dipesan, $pembeli, $status_pesanan) {
        $query = $this->db->prepare("INSERT INTO orders (id_plants, id_users, status_pesanan) VALUES (:tanaman_yang_dipesan, :pembeli, :status_pesanan)");
        $query->bindParam(':tanaman_yang_dipesan', $tanaman_yang_dipesan);
        $query->bindParam(':pembeli', $pembeli);
        $query->bindParam(':status_pesanan', $status_pesanan);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE orders SET id_plants = :tanaman_yang_dipesan, id_users = :pembeli, status_pesanan = :status_pesanan  WHERE id_orders = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':tanaman_yang_dipesan', $data['id_plants']);
        $stmt->bindParam(':pembeli', $data['id_users']);
        $stmt->bindParam(':status_pesanan', $data['status_pesanan']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM orders WHERE id_orders = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
