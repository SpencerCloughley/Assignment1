<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saving Song...</title>
</head>

<body>
    <section>
        <?php
        $ok = true;
        $name = $_POST['name'];
        $artist = $_POST['artist'];
        $year = $_POST['year'];
        $genreId = $_POST['genreId'];

        //verification for each variable depnding on what is required
        if (empty($name)) {
            echo '<p>Song name is required</p>';
            $ok = false;
        }

        if (empty($artist)) {
            echo '<p>Song artist is required</p>';
            $ok = false;
        }

        if (empty($year)) {
            echo '<p>Song year is required</p>';
            $ok = false;
        } else if (!is_numeric($year) && $year < date("Y")) {
            echo '<p>Song year should be a number</p>';
            $ok = false;
        }

        if (empty($genreId)) {
            echo '<p>Song genre is required</p>';
            $ok = false;
        } else if (!is_numeric($genreId)) {
            echo '<p>Song genre should be a number</p>';
            $ok = false;
        }
        if ($ok) {
            $db = new PDO('mysql:host=172.31.22.43;dbname=Spencer1178551', 'Spencer1178551', 'ST3BJVqAAF');
            $sql = "INSERT INTO songs (name,artist,year,genreId) VALUES(:name, :artist, :year, :genreId)";

            //prepare and add each variable to be included in the SQL statement
            $cmd = $db->prepare($sql);
            $cmd->bindParam(':name', $name, PDO::PARAM_STR, 255);
            $cmd->bindParam(':artist', $artist, PDO::PARAM_STR, 100);
            $cmd->bindParam(':year', $year, PDO::PARAM_INT);
            $cmd->bindParam(':genreId', $genreId, PDO::PARAM_INT);

            $cmd->execute();

            $db = null;

            echo "Song added";
        }
        ?>
    </section>

    <a href="songlist.php">See List</a>
</body>

</html>