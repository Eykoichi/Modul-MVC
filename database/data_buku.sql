CREATE DATABASE IF NOT EXISTS data_buku;
USE data_buku;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_buku VARCHAR(50) NOT NULL UNIQUE,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    tahun_terbit INT NOT NULL,
    stok INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO buku (kode_buku, judul, penulis, kategori, tahun_terbit, stok) VALUES
('BK-001', 'Pemrograman Web dengan PHP & MySQL', 'Budi Raharjo', 'Teknologi', 2022, 10),
('BK-002', 'Algoritma dan Pemrograman dalam Bahasa C', 'Rinaldi Munir', 'Ilmu Komputer', 2020, 15),
('BK-003', 'Laskar Pelangi', 'Andrea Hirata', 'Novel', 2005, 8),
('BK-004', 'Sejarah Dunia yang Disembunyikan', 'Jonathan Black', 'Sejarah', 2015, 5),
('BK-005', 'Atomic Habits: Perubahan Kecil yang Memberikan Hasil Luar Biasa', 'James Clear', 'Pengembangan Diri', 2019, 12),
('BK-006', 'Filosofi Teras', 'Henry Manampiring', 'Filsafat', 2018, 7);