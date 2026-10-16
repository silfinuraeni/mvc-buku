CREATE DATABASE IF NOT EXISTS toko_buku
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE toko_buku;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    harga INT NOT NULL,
    stok INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO buku (judul, penulis, kategori, harga, stok) VALUES
('Pemrograman Web dengan PHP', 'Andi Wijaya', 'Pengembangan Website', 85000, 15),
('Proses Bisnis', 'Budi Santoso', 'Bisnis', 95000, 10),
('Laskar Pelangi', 'Andrea Hirata', 'Novel', 75000, 20);git add database/toko_buku.sql