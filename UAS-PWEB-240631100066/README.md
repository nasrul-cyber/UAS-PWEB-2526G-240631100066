# KasKita - Sistem Catatan Keuangan Sederhana

Aplikasi web sederhana untuk melakukan pencatatan arus kas (pemasukan dan pengeluaran) secara ringkas, efisien, dan responsif. Proyek ini dibangun untuk memenuhi kriteria tugas Ujian Akhir Semester (UAS) mata kuliah Pemrograman Web[cite: 1].

---

## 👥 Informasi Mahasiswa
* **Nama:** M. NASRULLAH KAMAL MUSTHOFA[cite: 1]
* **NIM:** 240631100066[cite: 1]
* **Judul Aplikasi:** KasKita - Catatan Keuangan Sederhana[cite: 1]
* **Format Repositori:** UAS-PWEB-2526G-240631100066[cite: 1]

---

## 📝 Deskripsi Singkat
KasKita adalah aplikasi pengelolaan keuangan berbasis web native menggunakan kombinasi HTML5, CSS eksternal, PHP Native, dan MySQL[cite: 1]. Aplikasi ini berfokus pada visualisasi pencatatan data transaksi harian berupa uang masuk (pemasukan) dan uang keluar (pengeluaran). Sistem secara otomatis menghitung akumulasi total pemasukan, total pengeluaran, serta kalkulasi sisa saldo akhir yang ditampilkan secara dinamis di halaman beranda[cite: 1].

---

## 🛠️ Spesifikasi & Implementasi Fitur
Aplikasi ini dirancang untuk memenuhi spesifikasi teknis minimal dari instruksi UAS[cite: 1]:
1. **HTML5:** Menggunakan struktur semantik yang benar dan terbagi menjadi minimal 4 modul tampilan utama (Beranda/Daftar Data, Tambah Data, Edit Data, dan Hapus Data)[cite: 1].
2. **CSS Eksternal:** Layout bersih, minimalis, responsif ramah seluler, dan diorganisasi di dalam berkas folder `css/style.css`[cite: 1].
3. **PHP Native:** 
   * Menggunakan variabel, percabangan (`if-else`), dan perulangan (`while loop`)[cite: 1].
   * Menyertakan struktur komponen lewat fungsi `include` berkas `koneksi.php`[cite: 1].
   * Pengolahan form data via metode `POST` dan `GET`[cite: 1].
   * Memiliki minimal 2 fungsi internal (`formatRupiah()` dan `amankanInput()`)[cite: 1].
4. **MySQL (CRUD):** Integrasi operasi basis data penuh (Create, Read, Update, Delete) ke tabel relasional[cite: 1].

---

## 🗄️ Struktur Database
* **Nama Database:** `db_kaskita`[cite: 1]
* **Nama Tabel:** `keuangan`[cite: 1]
* **Spesifikasi Kolom Tabel:**
  * `id` : `INT` (Primary Key, Auto Increment)[cite: 1]
  * `tanggal` : `DATE` (Not Null)[cite: 1]
  * `keterangan` : `VARCHAR(255)` (Not Null)[cite: 1]
  * `tipe` : `ENUM('masuk', 'keluar')` (Not Null)[cite: 1]
  * `nominal` : `DECIMAL(10,2)` (Not Null)[cite: 1]

*Aplikasi ini memuat file `database.sql` yang berisi skema tabel di atas beserta **5 record data awal** sebagai syarat penilaian instan[cite: 1].*

---

## 📸 Screenshot Aplikasi
Berikut adalah dokumentasi antarmuka dari sistem KasKita:

### 1. Halaman Beranda (Daftar Riwayat Transaksi & Kartu Saldo)
![Beranda Utama](img/screenshot_index.png)

### 2. Halaman Tambah Catatan Keuangan Baru
![Tambah Data](img/screenshot_tambah.png)

### 3. Halaman Edit / Pembaruan Data
![Edit Data](img/screenshot_edit.png)

*(Catatan: Pastikan Anda telah mengambil tangkapan layar (screenshot) aplikasi Anda saat berjalan di localhost dan menyimpannya ke dalam folder `img/` sesuai nama file di atas agar gambar muncul di halaman GitHub)[cite: 1].*

---

## 🚀 Cara Menjalankan Aplikasi secara Lokal
1. Pastikan lingkungan server lokal seperti **XAMPP** sudah terpasang di komputer Anda.
2. Unduh atau klon repositori ini, lalu tempatkan foldernya ke dalam direktori root server: 
   `C:\xampp\htdocs\UAS-PWEB-240631100066`[cite: 1].
3. Jalankan aplikasi panel kontrol XAMPP, kemudian aktifkan modul **Apache** dan **MySQL**[cite: 1].
4. Buka peramban (browser) Anda, akses menu `http://localhost/phpmyadmin/`[cite: 1].
5. Buat database baru dengan nama `db_kaskita`[cite: 1].
6. Pilih database tersebut, masuk ke tab **Import**, pilih file `database.sql` yang berada di dalam folder proyek Anda, lalu klik tombol **Go/Import**[cite: 1].
7. Jalankan sistem aplikasi lewat tautan browser berikut:
   👉 `http://localhost/UAS-PWEB-240631100066/`[cite: 1]

---

## 🤖 Pernyataan Penggunaan Generative AI (GenAI)
Sesuai dengan regulasi kejujuran akademik yang ditentukan pada lembar instruksi UAS, proyek aplikasi **KasKita** ini dikembangkan dengan memanfaatkan bantuan asisten kecerdasan artifisial (GenAI)[cite: 1]. Pemanfaatan perangkat pintar tersebut diterapkan pada bagian:
* Perancangan skema tata letak arsitektur CSS eksternal agar antarmuka responsif dan estetis[cite: 1].
* Optimasi sanitasi fungsi PHP untuk pencegahan celah keamanan SQL Injection dasar[cite: 1].
* Penyusunan format dokumentasi teks markdown ini[cite: 1].

Pernyataan penggunaan teknologi kecerdasan buatan ini juga dijabarkan dan diulas secara transparan dalam video presentasi proyek pada tautan YouTube yang dikumpulkan[cite: 1].