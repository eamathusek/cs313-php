<?php
    require "connectDb.php";
        $db = get_db();
        $title = htmlspecialchars($_POST['title']);
        $genre = htmlspecialchars($_POST['genre']);
        $rating = htmlspecialchars($_POST['rating']);
        $release_date = htmlspecialchars($_POST['release_date']);
        
        $stmt = $db->prepare('INSERT INTO Movies(title, genre, rating, release_date)
                              VALUES (:title, :genre, :rating, :release_date);');
        $stmt->bindValue(':title', $title, PDO::PARAM_STR);
        $stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
        $stmt->bindValue(':rating', $rating, PDO::PARAM_INT);
        $stmt->bindValue(':release_date', $release_date, PDO::PARAM_STR);
        $stmt->execute();
    header("Location: viewDb.php");
    die();
?>