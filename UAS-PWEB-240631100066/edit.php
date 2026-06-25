<?php
include 'koneksi.php';

// Cek parameter ID di URL
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = amankanInput($_GET['id']);

// Ambil data lama berdasarkan ID (Read data spesifik)
$query = "SELECT * FROM keuangan WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    header("Location: index.php");
    exit;
}

// Proses update saat tombol ditekan
if (isset($_POST['submit'])) {
    $tanggal = amankanInput($_POST['tanggal']);
    $keterangan = amankanInput($_POST['keterangan']);
    $tipe = amankanInput($_POST['tipe']);
    $nominal = amankanInput($_POST['nominal']);

    // Query Update
    $update_query = "UPDATE keuangan SET tanggal = '$tanggal', keterangan = '$keterangan', tipe = '$tipe', nominal = '$nominal' WHERE id = $id";
    
    if (mysqli_query($koneksi, $update_query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Gagal memperbarui data!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi - KasKita</title>
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
                <h2>Edit Catatan Keuangan</h2>
                <a href="index.php" class="btn btn-secondary">Batal</a>
            </div>

            <form action="" method="POST" class="form-crud">
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal" required value="<?php echo $data['tanggal']; ?>">
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan / Deskripsi</label>
                    <input type="text" id="keterangan" name="keterangan" required value="<?php echo $data['keterangan']; ?>" autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="tipe">Jenis Arus Kas</label>
                    <select id="tipe" name="tipe" required>
                        <option value="masuk" <?php echo ($data['tipe'] == 'masuk') ? 'selected' : ''; ?>>Pemasukan (Uang Masuk)</option>
                        <option value="keluar" <?php echo ($data['tipe'] == 'keluar') ? 'selected' : ''; ?>>Pengeluaran (Uang Keluar)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nominal">Nominal (Rupiah)</label>
                    <input type="number" id="nominal" name="nominal" min="1" required value="<?php echo intval($data['nominal']); ?>">
                </div>

                <div class="form-actions">
                    <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
