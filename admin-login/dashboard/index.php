<?php
session_start();

if (!isset($_SESSION["admin_id"])) {
    header("Location: ../auth/login.php");
    exit;
}

$adminName = $_SESSION["admin_name"];
$adminEmail = $_SESSION["admin_email"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<div class="dashboard-container">
    <nav class="navbar">
        <div class="brand">
            <div class="brand-icon">⚙️</div>
            <h2>Control Panel</h2>
        </div>
        <a href="../auth/logout.php" class="btn-logout">Logout</a>
    </nav>

    <main class="dashboard-content">
        <!-- Hero Header dengan Visual Baru -->
        <div class="hero-card">
            <div class="hero-text">
                <h1>Halo, <?= htmlspecialchars($adminName) ?>! 👋</h1>
                <p>Sistem berjalan normal. Hari ini kamu siap mengelola data?</p>
            </div>
            <div class="badge-status">
                <span class="dot"></span> Online
            </div>
        </div>

        <!-- Grid Kartu Informasi -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">👤</div>
                <div class="stat-info">
                    <h3>Role Akses</h3>
                    <p>Super Administrator</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">✉️</div>
                <div class="stat-info">
                    <h3>Email Aktif</h3>
                    <p><?= htmlspecialchars($adminEmail) ?></p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">🔒</div>
                <div class="stat-info">
                    <h3>Sesi Keamanan</h3>
                    <p>Terenkripsi (PDO)</p>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>