<?php
// app/models/Orders.php
require_once '../config/database.php';

class Orders {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM orders");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM orders WHERE id_orders = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($tanaman_yang_dipesan, $pembeli, $status_pesanan) {
        $query = $this->db->prepare("INSERT INTO orders (tanaman_yang_dipesan, pembeli, status_pesanan) VALUES (:tanaman_yang_dipesan, :pembeli, :status_pesanan)");
        $query->bindParam(':tanaman_yang_dipesan', $tanaman_yang_dipesan);
        $query->bindParam(':pembeli', $pembeli);
        $query->bindParam(':status_pesanan', $status_pesanan);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE orders SET tanaman_yang_dipesan = :tanaman_yang_dipesan, pembeli = :pembeli, status_pesanan = :status_pesanan  WHERE id_orders = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':tanaman_yang_dipesan', $data['tanaman_yang_dipesan']);
        $stmt->bindParam(':pembeli', $data['pembeli']);
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
