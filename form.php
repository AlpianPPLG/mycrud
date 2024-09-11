<?php
    session_start();
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
    <body>
        <h1>Tambah Data</h1>
<?php
    if (isset($_SESSION['success_message'])) {
        echo "<p style='color: green;'>" . $_SESSION['success_message'] . "</p>";
        unset($_SESSION['success_message']);
    }
?>

    <form method="post" action="insert.php">
        <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required>
    <input type="submit" value="Simpan">

    </form>
    </body>
</html>
</html>