<?php
    $computer_id = $_GET['computer_id'];
    require('connectDb.php');
    $db = get_db();
    $stmt = $db->prepare("DELETE FROM Laptops WHERE computer_id=$computer_id;");
    $stmt->execute();
    header("Location: viewDb.php");
    die();
?>