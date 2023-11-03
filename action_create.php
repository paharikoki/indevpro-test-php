<?php
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];
    $semester = $_POST['semester'];
    $kelas = $_POST['kelas'];

    $sql = "INSERT INTO mahasiswa (nama_mahasiswa, nim, email, semester, kelas) 
            VALUES ('$nama_mahasiswa', '$nim', '$email', '$semester', '$kelas')";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>