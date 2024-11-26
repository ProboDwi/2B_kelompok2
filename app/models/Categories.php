<?php
// app/models/Categories.php
require_once '../config/database.php';

class Categories {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM categories");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM categories WHERE id_categories = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_kategori, $deskripsi) {
        $query = $this->db->prepare("INSERT INTO categories (nama_kategori, deskripsi) VALUES (:nama_kategori, :deskripsi)");
        $query->bindParam(':nama_kategori', $nama_kategori);
        $query->bindParam(':deskripsi', $deskripsi);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE categories SET nama_kategori = :nama_kategori, deskripsi = :deskripsi  WHERE id_categories = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_kategori', $data['nama_kategori']);
        $stmt->bindParam(':deskripsi', $data['deskripsi']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM categories WHERE id_categories = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}