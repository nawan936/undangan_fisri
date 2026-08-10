<form id="push_ucapan" method="POST" action="simpan_ucapan.php">
    <div class="form-group col-md-12">
        <label>Nama</label>
        <input maxlength="20" required name="nama" id="konfir_nama_2" class="form-control form-fun">
    </div>

    <div class="form-group col-md-12">
        <label>Ucapan</label>
        <textarea required name="ucapan" id="ucapan_2" class="form-control form-fun" style="height: 100px;"></textarea>
    </div>

<div class="form-group col-md-12 font-p" id="filed_kehadiran" style="background-color: transparan" data-aos="fade-up">
                    <label data-aos="fade-up"class="form-label hadir_hadir">Kehadiran</label>
                    <select data-aos="fade-up"required class="form-control form-fun" name="ket_hadir" id="hadir_id">
                        <option value="" selected>Option</option>
                        <option class="val_nohadir" value="0">Tidak Hadir</option>
                        <option class="val_hadir" value="1">Hadir</option>
                    </select>
                </div>

    <div class="form-group col-md-12" style="background-color: #fff; display:none" id="wa3_popup">
        <label style="color: #000 !important" class="form-label">Jumlah Orang yang Hadir</label>
        <select required class="form-control form-fun" name="jumlah" id="jumlah_datang_id_popup">
            <option value="1">1 Orang</option>
            <option value="2">2 Orang</option>
            <option value="3">3 Orang</option>
            <option value="4">4 Orang</option>
            <option value="5">5 Orang</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Kirim</button>
</form>

      <div data-aos="fade-up"class="box-ucapan-wrapper">
<div class="box-ucapan font-p" id="box_ucapan" style="background-color: #fff; text-align: left" data-aos="fade-up">
    <?php
    include "koneksi.php"; 
    $result = mysqli_query($conn, "SELECT * FROM ucapan ORDER BY created_at DESC");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div style='margin-bottom:10px; padding:10px; border-bottom:1px solid #eee'>";
        echo "<strong>" . htmlspecialchars($row['nama']) . "</strong><br>";
        echo "<p>" . nl2br(htmlspecialchars($row['ucapan'])) . "</p>";
        echo "<small>Hadir: " . ($row['ket_hadir'] ? 'Ya' : 'Tidak'). "</small>";
        echo "</div>";
    }
    ?>
</div>

    </div>