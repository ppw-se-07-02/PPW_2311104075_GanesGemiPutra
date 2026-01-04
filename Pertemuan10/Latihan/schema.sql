-- Jalankan di phpMyAdmin -> tab SQL
CREATE DATABASE IF NOT EXISTS toko_bootstrap DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE toko_bootstrap;

CREATE TABLE IF NOT EXISTS produk (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_produk VARCHAR(100) NOT NULL,
  kategori VARCHAR(50) NOT NULL,
  harga DECIMAL(12,2) NOT NULL DEFAULT 0,
  stok INT NOT NULL DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- contoh data
INSERT INTO produk (nama_produk, kategori, harga, stok) VALUES
('Keyboard Mechanical', 'Aksesoris', 499000, 12),
('Mouse Wireless', 'Aksesoris', 159000, 25),
('SSD 512GB', 'Komponen', 650000, 8);
