<!DOCTYPE html>
<html>

<head>
    <title>List of Mahasiswa Records</title>
</head>

<body>
    <h1>List of Mahasiswa Records</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Semester</th>
            <th>Kelas</th>
        </tr>

        <?php
        include("action_read.php");

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama_mahasiswa'] . "</td>";
            echo "<td>" . $row['nim'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['semester'] . "</td>";
            echo "<td>" . $row['kelas'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>