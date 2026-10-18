<?php
require_once __DIR__ . '/../../config/database.php';
require_once __DIR__ . '/../models/buku.php';

class BukuController {
    private $bukuModel;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->bukuModel = new Buku($db);
    }

    public function index() {
        $bukuList = $this->bukuModel->getAll();
        $action = isset($_GET['action']) ? $_GET['action'] : 'list';
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if ($action == 'create') {
            include __DIR__ . '/../views/buku/create.php';
        } elseif ($action == 'edit' && $id) {
            $buku = $this->bukuModel->getById($id);
            include __DIR__ . '/../views/buku/edit.php';
        } else {
            include __DIR__ . '/../views/buku/index.php';
        }
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['kode_buku']) || empty($_POST['judul']) || empty($_POST['penulis']) || empty($_POST['kategori']) || empty($_POST['tahun_terbit']) || empty($_POST['stok'])) {
                header('Location: index.php?action=create&status=error&msg=Semua field wajib diisi!');
                exit;
            }

            if ($this->bukuModel->create($_POST)) {
                header('Location: index.php?status=success&msg=Data buku berhasil ditambahkan!');
            } else {
                header('Location: index.php?action=create&status=error&msg=Gagal menambahkan data buku.');
            }
            exit;
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])) {
            $id = $_GET['id'];
            if (empty($_POST['kode_buku']) || empty($_POST['judul']) || empty($_POST['penulis']) || empty($_POST['kategori']) || empty($_POST['tahun_terbit']) || empty($_POST['stok'])) {
                header('Location: index.php?action=edit&id='.$id.'&status=error&msg=Semua field wajib diisi!');
                exit;
            }

            if ($this->bukuModel->update($id, $_POST)) {
                header('Location: index.php?status=success&msg=Data buku berhasil diperbarui!');
            } else {
                header('Location: index.php?action=edit&id='.$id.'&status=error&msg=Gagal memperbarui data buku.');
            }
            exit;
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if ($this->bukuModel->delete($id)) {
                header('Location: index.php?status=success&msg=Data buku berhasil dihapus!');
            } else {
                header('Location: index.php?status=error&msg=Gagal menghapus data buku.');
            }
            exit;
        }
    }
}