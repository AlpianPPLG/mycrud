<?php
    // echo $_POST['nama'];
    // echo $_POST['alamat'];

    // include "database.php";

    // $query = "INSERT INTO person VALUES('',`$_POST[nama]`,`$_POST[alamat]`) ";

    // $data = $db->prepare($query);
    // $data->execute();

    include "database.php";

    $query = "INSERT INTO person VALUES('', :nama, :alamat)";

    $data = $db->prepare($query);

    // Bind parameters
    $data->bindParam(':nama', $_POST['nama']);
    $data->bindParam(':alamat', $_POST['alamat']);

    // Execute the query
    $data->execute();

    session_start();
    // Assuming you have successfully inserted data here
    $_SESSION['success_message'] = "Data telah disimpan!";  
    // $_SESSION['success_message_expire'] = time() + 5; // Expire after 5 seconds

    header("location: form.php");

    exit();
?>