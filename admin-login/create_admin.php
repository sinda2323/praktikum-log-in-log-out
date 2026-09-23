<?php
require_once "config/database.php";

$name = "Administrator";
$email = "admin@gmail.com";
$password = "admin123";

// Membuat hash password yang valid
$passwordHash = password_hash($password, PASSWORD_DEFAULT);

try {
    // Jika email sudah ada, update password dan namanya
    $sql = "INSERT INTO admins (name, email, password) 
            VALUES (:name, :email, :password)
            ON DUPLICATE KEY UPDATE name = :name, password = :password";
            
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        "name" => $name,
        "email" => $email,
        "password" => $passwordHash
    ]);

    echo "<h3>Akun Admin Berhasil Diperbarui / Dibuat!</h3>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br><br>";
    echo "<a href='auth/login.php'>Klik di sini untuk Login</a>";
} catch (PDOException $e) {
    echo "Gagal: " . $e->getMessage();
}