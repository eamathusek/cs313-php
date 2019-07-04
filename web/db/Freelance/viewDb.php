<?php
    require "connectDb.php";
    $db = get_db();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Items</title>
    <link rel="stylesheet" href="styling.css">
</head>

    <body>
        <div>
            <h1>Items I own</h1>

            <h3>Movies</h3>

            <table class="table1">

            <tr>
                <th>Movies</th>
            </tr>

                <tr>
                    <th>ID</th>
                    <th>Title</th> 
                    <th>Genre</th>
                    <th>Rating</th>
                    <th>Release Date</th>
                    <th>Remove?</th>

                </tr>
            <?php
            $movies = $db->prepare("SELECT film_id, title, genre, rating, release_date FROM Movies");
            $movies->execute();
            // Go through each result
            while ($row = $movies->fetch(PDO::FETCH_ASSOC))
            {
                // The variable "row" now holds the complete record for that
                // row, and we can access the different values based on their
                // names
                $film_id = $row['film_id'];
                $title = $row['title'];
                $genre = $row['genre'];
                $rating = $row['rating'];
                $releaseDate = $row['release_date'];
            ?>
        </div>            
            <tr>
                <td><?php echo $film_id;?></td>
                <td><?php echo $title;?></td>
                <td><?php echo $genre;?></td>
                <td><?php echo $rating;?></td>
                <td><?php echo $releaseDate;?></td>
                <td>
                    <form method="POST" action="removeMovie.php?film_id=<?php echo $film_id ?>">
                        <input type="hidden" name="film_id" value="<?php echo $film_id?>">
                        <input type="submit" name="Submit" value="Remove">
                    </form>
                </td>

            </tr>
    <?php
        }
    ?>
    <tr>
    <td>
                    <form action="addMovieform.html">
                        <button type="submit"> Add Movie</button>
                    </form>
                </td>
                </tr>
    </table>

        <br>
        <br>

        <table class="table1">
        <tr>
                <th>Phones</th>
        </tr>
            <tr>
                <th>ID</th>
                <th>Make</th> 
                <th>Model</th>
                <th>Year</th>
                <th>Remove</th>
            </tr>

<?php
            $phones = $db->prepare("SELECT phone_id, make, model, year FROM Phones");
            $phones->execute();
            // Go through each result
            while ($row = $phones->fetch(PDO::FETCH_ASSOC))
            {
                // The variable "row" now holds the complete record for that
                // row, and we can access the different values based on their
                // name
                $phone_id = $row['phone_id'];
                $make = $row['make'];
                $model = $row['model'];
                $year = $row['year'];
            ?>
            
            <tr>
                <td><?php echo $phone_id;?></td>
                <td><?php echo $make;?></td>
                <td><?php echo $model;?></td>
                <td><?php echo $year;?></td>
                <td>
                    <form method="POST" action="removePhone.php?phone_id=<?php echo $phone_id ?>">
                        <input type="hidden" name="phone_id" value="<?php echo $phone_id?>">
                        <input type="submit" name="Submit" value="Remove">
                    </form>
                </td>
            </tr>
    <?php
        }
    ?>
    <tr>
    <td>
        <form action="addPhoneform.html">
            <button type="submit"> Add Phone</button>
        </form>
        </td>
        </tr>
        </table>

        <br>
        <br>
        <table class="table1">
        <tr>
                <th>Laptops</th>
        </tr>
            <tr>
                <th>ID</th>
                <th>Make</th> 
                <th>Model</th>
                <th>Year</th>
                <th>Condition</th>
                <th>Remove</th>

            </tr>

<?php
            $laptops = $db->prepare("SELECT computer_id, make, model, year, condition FROM Laptops");
            $laptops->execute();
            // Go through each result
            while ($row = $laptops->fetch(PDO::FETCH_ASSOC))
            {
                // The variable "row" now holds the complete record for that
                // row, and we can access the different values based on their
                // name
                $computerId = $row['computer_id'];
                $make = $row['make'];
                $model = $row['model'];
                $year = $row['year'];
                $condition = $row['condition'];
            ?>
        </div>
            
            <tr>
                <td><?php echo $computerId;?></td>
                <td><?php echo $make;?></td>
                <td><?php echo $model;?></td>
                <td><?php echo $year;?></td>
                <td><?php echo $condition;?></td>
                <td>
                    <form method="POST" action="removeLaptop.php?computer_id=<?php echo $computer_id ?>">
                        <input type="hidden" name="computer_id" value="<?php echo $computer_id?>">
                        <input type="submit" name="Submit" value="Remove">
                    </form>
                </td>
            </tr>
    <?php
        }
    ?>
    <tr>
        <td>
        <form action="addLaptopform.html">
            <button type="submit"> Add Laptop</button>
        </form>
        </td>
        </tr>
        </table>

    </body>
</html>