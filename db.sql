-- db.sql
CREATE DATABASE IF NOT EXISTS ecovolunteer CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE ecovolunteer;

-- users table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- registrations (pendaftaran ke event)
CREATE TABLE IF NOT EXISTS registrations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(50),
  address TEXT,
  event_name VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- newsletter subscribers
CREATE TABLE IF NOT EXISTS newsletter (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL UNIQUE,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- optional: sample activities table 
CREATE TABLE IF NOT EXISTS activities (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  date_info VARCHAR(255),
  location VARCHAR(255),
  image_url VARCHAR(500),
  status VARCHAR(50),
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- contoh data activities 
INSERT INTO activities (title, description, date_info, location, image_url, status) VALUES
('Gerakan Jakarta Hijau: Tanam 1000 Pohon','Aksi penanaman pohon produktif di 5 titik vital Jakarta.','Minggu, 5 Juni 2023','5 Lokasi di Jakarta','https://storage.googleapis.com/.../546465dd-0d93-4a2e-8f48-a89705902e4c.png','Segera');
