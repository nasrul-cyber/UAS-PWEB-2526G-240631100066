<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    // Memproses data form (Form Processing) dan sanitasasi input
    $tanggal = amankanInput($_POST['tanggal']);
    $keterangan = amankanInput($_POST['keterangan']);
    $tipe = amankanInput($_POST['tipe']);
    $nominal = amankanInput($_POST['nominal']);

    // Query Create
    $query = "INSERT INTO keuangan (tanggal, keterangan, tipe, nominal) VALUES ('$tanggal', '$keterangan', '$tipe', '$nominal')";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Gagal menambah data!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi - KasKita</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-brand">KasKita</div>
        <div class="user-profile">
            <span class="user-avatar">MK</span>
            <div class="user-info">
                <span class="user-name">M. Nasrullah K. M.</span>
                <span class="user-nim">NIM: 240631100066</span>
            </div>
        </div>
    </nav>

    <div class="container form-container">
        <div class="content-box">
            <div class="content-header">
                <h2>Tambah Catatan Keuangan</h2>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </div>

            <form action="" method="POST" class="form-crud">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" required value="<?php echo date('Y-m-d'); ?>">
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan / Deskripsi</label>
                    <input type="text" id="keterangan" name="keterangan" placeholder="Contoh: Beli makan malam" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="tipe">Jenis Arus Kas</label>
                    <select id="tipe" name="tipe" required>
                        <option value="masuk">Pemasukan (Uang Masuk)</option>
                        <option value="keluar">Pengeluaran (Uang Keluar)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nominal">Nominal (Rupiah)</label>
                    <input type="number" id="nominal" name="nominal" min="1" placeholder="Contoh: 50000" required>
                </div>

                <div class="form-actions">
                    <button type="submit" name="submit" class="btn btn-primary">Simpan Transaksi</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
