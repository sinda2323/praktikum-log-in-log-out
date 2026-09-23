CREATE DATABASE IF NOT EXISTS db_sistem_admin;
USE db_sistem_admin;

CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO admins (name, email, password) VALUES 
('Administrator', 'admin@gmail.com', '$2y$10$Q7S9L2yS0u.M9/W0o2I/f.5Kz7N.P8wU6e.D1A/O2G3h4I5j6K7l8')
ON DUPLICATE KEY UPDATE name=VALUES(name);