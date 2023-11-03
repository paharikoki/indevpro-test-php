<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $semester = $_POST['semester'];
    $kelas = $_POST['kelas'];

    $sql = "UPDATE mahasiswa SET 
            nama_mahasiswa='$nama_mahasiswa', nim='$nim', email='$email', semester='$semester', kelas='$kelas' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>