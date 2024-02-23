<?php
    session_start();
    // if (isset($_SESSION['success_message']) && $_GET['success'] == 1) {
        // echo "<p style='color: green;'>" . $_SESSION['success_message'] . "</p>";
    //     echo "<script>setTimeout(function() { alert('" . $_SESSION['success_message'] . "'); }, 3000);</script>";
    //     unset($_SESSION['success_message']);
    //  unset($_SESSION['success_message_expire']);
    // }
?>

<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="style.css">

            <script>
        //         document.addEventListener("DOMContentLoaded", function() {
        //             setTimeout(function() {
        //         document.getElementById("success-message").style.display = "none";
        //     }, 3000); // Hide after 3 seconds
        // });
//         document.addEventListener("DOMContentLoaded", function() {
//             setTimeout(function() {
//         var confirmation = alert("Data telah disimpan!");
//         setTimeout(function() {
//             confirmation.close();
//         }, 3000); // Close alert after 3 seconds
//     }, 3000); // Show alert after 3 seconds
// });

// document.addEventListener("DOMContentLoaded", function() {
//     setTimeout(function() {
//         document.getElementById("success-message").style.display = "none";
//     }, 3000); // Hide after 3 seconds
// });

</script>

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