<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song List</title>
</head>
<body>
    <main>
        <h1>Song List</h1>
        <a href="add-song.php">Add a new Song</a>

        <?php
        $db=new PDO('mysql:host=172.31.22.43;dbname=Spencer1178551','Spencer1178551','ST3BJVqAAF');
        $sql="SELECT * FROM songs INNER JOIN genre on songs.genreId=genre.genreId";
        $cmd = $db->prepare($sql);
        $cmd->execute();
        $songs=$cmd->fetchAll();
        //start of the table to label all the columns
        echo '<table><thead><th>Song Name</th><th>Artist</th><th>Year Released</th><th>Genre</th></thead>';
        
        //print each song out from the table with all the necessary information
        foreach($songs as $song){
            echo '<tr>
            <td>' . $song['name'] . '</td>
            <td>' . $song['artist'] . '</td>
            <td>' . $song['year'] . '</td>
            <td>' . $song['genre'] . '</td>
            </tr>';
        }
        //closing out table
        echo '</table>';
        ?>
    </main>
</body>
</html>