<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = amankanInput($_GET['id']);
    
    // Query Delete
    $query = "DELETE FROM keuangan WHERE id = $id";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location.href='index.php';</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
