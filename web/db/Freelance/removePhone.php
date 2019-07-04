<?php
    $phone_id = $_GET['phone_id'];
    require('connectDb.php');
    $db = get_db();
    $stmt = $db->prepare("DELETE FROM Phones WHERE phone_id=$phone_id;");
    $stmt->execute();
    header("Location: viewDb.php");
    die();
?>