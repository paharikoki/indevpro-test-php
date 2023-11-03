<!DOCTYPE html>
<html>

<head>
    <title>Update Mahasiswa Record</title>
</head>

<body>
    <h1>Update Mahasiswa Record</h1>
    <form action="action_update.php" method="POST">
        <input type="hidden" name="id" value="ID_OF_RECORD_TO_UPDATE">

        <label for="nama_mahasiswa">Nama Mahasiswa:</label>
        <input type="text" name="nama_mahasiswa" required><br><br>

        <label for="nim">NIM:</label>
        <input type="text" name="nim" required><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" required><br><br>

        <label for="semester">Semester:</label>
        <input type="number" name="semester" required><br><br>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" required><br><br>

        <input type="submit" value="Update Record">
    </form>
</body>

</html>