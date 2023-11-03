<?php
include("db_connection.php");

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Display data as needed
        echo "ID: " . $row['id'] . " Name: " . $row['nama_mahasiswa'] . "<br>";
    }
} else {
    echo "No records found";
}
?>