<?php
$conn = new mysqli("localhost", "root", "", "undangan");

$result = $conn->query("SELECT * FROM ucapan ORDER BY id DESC");

while($row = $result->fetch_assoc()){
    echo "<div style='border:1px solid #ddd; padding:10px; margin:5px; border-radius:5px'>";
    echo "<b>".$row['nama']."</b> (".($row['ket_hadir'] ? "Hadir" : "Tidak Hadir")." - ".$row['jumlah']." orang)<br>";
    echo nl2br($row['ucapan']);
    echo "</div>";
}
$conn->close();
?>
