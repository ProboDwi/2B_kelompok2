<?php
// app/models/User.php
require_once '../config/database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM users WHERE id_users = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama, $email, $password, $alamat) {
        $query = $this->db->prepare("INSERT INTO users (nama, email, password, alamat) VALUES (:nama, :email, :password, :alamat)");
        $query->bindParam(':nama', $nama);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->bindParam(':alamat', $alamat);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE users SET nama = :nama, email = :email, password = :password, alamat = :alamat WHERE id_users = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':alamat', $data['alamat']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM users WHERE id_users = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
