<?php 
include 'koneksi.php'; // Menggunakan include sesuai spesifikasi

// Mengambil seluruh data dari database (Read)
$query = "SELECT * FROM keuangan ORDER BY tanggal DESC, id DESC";
$result = mysqli_query($koneksi, $query);

// Menghitung total saldo awal menggunakan perulangan & variabel
$total_masuk = 0;
$total_keluar = 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KasKita - Catatan Keuangan</title>
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

    <div class="container">
        <div class="dashboard-grid">
            <?php
            // Hitung total dulu lewat perulangan sebelum nampilin tabel
            $hitung_query = mysqli_query($koneksi, "SELECT tipe, nominal FROM keuangan");
            while($row_hitung = mysqli_fetch_assoc($hitung_query)) {
                if($row_hitung['tipe'] == 'masuk') {
                    $total_masuk += $row_hitung['nominal'];
                } else {
                    $total_keluar += $row_hitung['nominal'];
                }
            }
            $saldo_akhir = $total_masuk - $total_keluar;
            ?>
            <div class="card card-masuk">
                <h3>Total Pemasukan</h3>
                <p><?php echo formatRupiah($total_masuk); ?></p>
            </div>
            <div class="card card-keluar">
                <h3>Total Pengeluaran</h3>
                <p><?php echo formatRupiah($total_keluar); ?></p>
            </div>
            <div class="card card-saldo <?php echo ($saldo_akhir >= 0) ? 'positif' : 'negatif'; ?>">
                <h3>Sisa Saldo</h3>
                <p><?php echo formatRupiah($saldo_akhir); ?></p>
            </div>
        </div>

        <div class="content-box">
            <div class="content-header">
                <h2>Riwayat Transaksi</h2>
                <a href="tambah.php" class="btn btn-primary">+ Tambah Transaksi</a>
            </div>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Tipe</th>
                        <th>Nominal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($result) > 0): ?>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo date('d-m-Y', strtotime($row['tanggal'])); ?></td>
                                <td><?php echo $row['keterangan']; ?></td>
                                <td>
                                    <span class="badge badge-<?php echo $row['tipe']; ?>">
                                        <?php echo ucfirst($row['tipe']); ?>
                                    </span>
                                </td>
                                <td class="text-<?php echo $row['tipe']; ?>">
                                    <?php echo formatRupiah($row['nominal']); ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn-action btn-edit">Edit</a>
                                    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn-action btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini bre?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" style="text-align: center; padding: 20px; color: #888;">Belum ada catatan keuangan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>