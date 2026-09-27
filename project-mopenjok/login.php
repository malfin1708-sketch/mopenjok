<?php
session_start();
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama     = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    $remember = isset($_POST['remember']) ? true : false;

    // Bersihkan session lama jika ada
    session_unset();

    if (!empty($nama) && !empty($password)) {
        
        try {
            // Cek nama dan password secara presisi ke database SQLite
            $stmt = $db->prepare("SELECT * FROM users WHERE nama = :nama AND password = :password LIMIT 1");
            $stmt->bindValue(':nama', $nama, PDO::PARAM_STR);
            $stmt->bindValue(':password', $password, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // JIKA NAMA DAN PASSWORD COCOK
            if ($user) {
                $_SESSION['user_id']   = $user['id'];
                $_SESSION['user_nama'] = $user['nama'];

                if ($remember) {
                    setcookie("user_nama", $user['nama'], time() + (86400 * 30), "/");
                }

                // Berhasil login -> Masuk ke Dashboard
                header("Location: dashboard.php");
                exit();

            } else {
                // JIKA SALAH -> Peringatan & Kembali ke halaman login
                echo "<script>
                        alert('Nama atau Password salah!');
                        window.location.href = 'index.php';
                      </script>";
                exit();
            }

        } catch (PDOException $e) {
            echo "<script>
                    alert('Terjadi kesalahan database!');
                    window.location.href = 'index.php';
                  </script>";
            exit();
        }

    } else {
        echo "<script>
                alert('Silakan isi Nama dan Password!');
                window.location.href = 'index.php';
              </script>";
        exit();
    }

} else {
    header("Location: index.php");
    exit();
}
?>