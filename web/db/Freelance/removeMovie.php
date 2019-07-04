<?php
    $film_id = $_GET['film_id'];
    require('connectDb.php');
    $db = get_db();
    $stmt = $db->prepare("DELETE FROM Movies WHERE film_id=$film_id;");
    $stmt->execute();
    header("Location: viewDb.php");
    die();
?>