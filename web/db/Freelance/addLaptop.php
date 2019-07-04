<?php
    require "connectDb.php";
        $db = get_db();
        $make = htmlspecialchars($_POST['make']);
        $model = htmlspecialchars($_POST['model']);
        $year = htmlspecialchars($_POST['year']);
        $condition = htmlspecialchars($_POST['condition']);
        
        $stmt = $db->prepare('INSERT INTO Laptops(make, model, year, condition)
                              VALUES (:make, :model, :year, :condition);');
        $stmt->bindValue(':make', $make, PDO::PARAM_STR);
        $stmt->bindValue(':model', $model, PDO::PARAM_STR);
        $stmt->bindValue(':year', $year, PDO::PARAM_INT);
        $stmt->bindValue(':condition', $condition, PDO::PARAM_STR);
        $stmt->execute();
    header("Location: viewDb.php");
    die();
?>