<?php
// app/models/User.php
require_once '../config/database.php';

class Plants {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM plants JOIN categories WHERE plants.id_categories = categories.id_categories");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    // method untuk mengambil data categories
    public function getAllCategories() {
        $query = $this->db->query("SELECT * FROM categories");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM plants JOIN categories WHERE id_plants = :id AND plants.id_categories = categories.id_categories");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_tanaman, $kategori, $harga, $penjual) {
        $query = $this->db->prepare("INSERT INTO plants (nama_tanaman, id_categories, harga, penjual) VALUES (:nama_tanaman, :kategori, :harga, :penjual)");
        $query->bindParam(':nama_tanaman', $nama_tanaman);
        $query->bindParam(':kategori', $kategori);
        $query->bindParam(':harga', $harga);
        $query->bindParam(':penjual', $penjual);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE plants SET nama_tanaman = :nama_tanaman, id_categories = :kategori, harga = :harga, penjual = :penjual WHERE id_plants = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_tanaman', $data['nama_tanaman']);
        $stmt->bindParam(':kategori', $data['id_categories']);
        $stmt->bindParam(':harga', $data['harga']);
        $stmt->bindParam(':penjual', $data['penjual']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM plants WHERE id_plants = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
