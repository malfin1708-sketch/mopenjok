<?php
try {
    // Menghubungkan ke file database SQLite
    $db = new PDO("sqlite:" . __DIR__ . "/database-for-mopenjok.db");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi SQLite Gagal: " . $e->getMessage());
}
?>