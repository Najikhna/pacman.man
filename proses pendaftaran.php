<?php
// Koneksi ke database
$servername = "pacm_11"; // Ubah dengan host database Anda
$username = "pacm_11";        // Ubah dengan username database Anda
$password = "11";            // Ubah dengan password database Anda
$dbname = "users";   // Ubah dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nomor = $_POST['nomor'];
$pembayaran = $_POST['pembayaran'];

// Query untuk memasukkan data ke database
$sql = "INSERT INTO peserta (nama, kelas, nomor, pembayaran) 
        VALUES ('$nama', '$kelas', '$nomor', '$pembayaran')";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
