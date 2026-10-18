<?php
class Buku {
    private $conn;
    private $table = 'buku';

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function create($data) {
        $query = "INSERT INTO " . $this->table . " (kode_buku, judul, penulis, kategori, tahun_terbit, stok) VALUES (:kode_buku, :judul, :penulis, :kategori, :tahun_terbit, :stok)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ':kode_buku' => $data['kode_buku'],
            ':judul' => $data['judul'],
            ':penulis' => $data['penulis'],
            ':kategori' => $data['kategori'],
            ':tahun_terbit' => $data['tahun_terbit'],
            ':stok' => $data['stok']
        ]);
    }

    public function update($id, $data) {
        $query = "UPDATE " . $this->table . " SET kode_buku = :kode_buku, judul = :judul, penulis = :penulis, kategori = :kategori, tahun_terbit = :tahun_terbit, stok = :stok WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ':id' => $id,
            ':kode_buku' => $data['kode_buku'],
            ':judul' => $data['judul'],
            ':penulis' => $data['penulis'],
            ':kategori' => $data['kategori'],
            ':tahun_terbit' => $data['tahun_terbit'],
            ':stok' => $data['stok']
        ]);
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}