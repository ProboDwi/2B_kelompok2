<?php
// app/models/User.php
require_once '../config/database.php';

class Plants {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM plants");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM plants WHERE id_plants = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_tanaman, $kategori, $deskripsi, $harga, $penjual) {
        $query = $this->db->prepare("INSERT INTO plants (nama_tanaman, kategori, deskripsi, harga, penjual) VALUES (:nama_tanaman, :kategori, :deskripsi, :harga, :penjual)");
        $query->bindParam(':nama_tanaman', $nama_tanaman);
        $query->bindParam(':kategori', $kategori);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':harga', $harga);
        $query->bindParam(':penjual', $penjual);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE plants SET nama_tanaman = :nama_tanaman, kategori = :kategori, deskripsi = :deskripsi, harga = :harga, penjual = :penjual WHERE id_plants = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_tanaman', $data['nama_tanaman']);
        $stmt->bindParam(':kategori', $data['kategori']);
        $stmt->bindParam(':deskripsi', $data['deskripsi']);
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
