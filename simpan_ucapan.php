<?php
include "koneksi.php";

$nama = $_POST['nama'];
$ucapan = $_POST['ucapan'];
$ket_hadir = $_POST['ket_hadir'];

// Simpan ke database
mysqli_query($conn, "INSERT INTO ucapan (nama, ucapan, ket_hadir, created_at) 
                     VALUES ('$nama','$ucapan','$ket_hadir', NOW())");

// Ambil HTML untuk langsung dikembalikan
echo "<div style='margin-bottom:10px; padding:10px; border-bottom:1px solid #eee'>";
echo "<strong>" . htmlspecialchars($nama) . "</strong><br>";
echo "<p>" . nl2br(htmlspecialchars($ucapan)) . "</p>";
echo "<small>keterangan: " . ($ket_hadir ? 'Hadir' : 'Tidak Hadir'). "</small>";
echo "</div>";
?>
