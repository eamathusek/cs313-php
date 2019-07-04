<?php
    require "connectDb.php";
        $db = get_db();
        $make = htmlspecialchars($_POST['make']);
        $model = htmlspecialchars($_POST['model']);
        $year = htmlspecialchars($_POST['year']);
        
        $stmt = $db->prepare('INSERT INTO Phones(make, model, year)
                              VALUES (:make, :model, :year);');
        $stmt->bindValue(':make', $make, PDO::PARAM_STR);
        $stmt->bindValue(':model', $model, PDO::PARAM_STR);
        $stmt->bindValue(':year', $year, PDO::PARAM_INT);
        $stmt->execute();
    header("Location: viewDb.php");
    die();
?>