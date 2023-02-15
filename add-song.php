<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Song</title>
</head>
<body>
    <main>
        <h1>Add Song</h1>
        <form action="saved-song.php" method="post">
            <fieldset>
                <label for="name">Song Name: *</label>
                <textarea name="name" id="name" required></textarea>
            </fieldset>
            <fieldset>
                <label for="artist">Artist: *</label>
                <textarea name="artist" id="artist" required></textarea>
            </fieldset>
            <fieldset>
                <label for="year">Release Year: *</label>
                <textarea name="year" id="year" required></textarea>
            </fieldset>
            <fieldset>
                <label for="genreId">Genre: *</label>
                <select name="genreId" id="genre">
                    <?php
                        $db=new PDO('mysql:host=172.31.22.43;dbname=Spencer1178551','Spencer1178551','ST3BJVqAAF');
                        $sql="SELECT * from genre";
                        $cmd=$db->prepare($sql);
                        $cmd->execute();
                        $genres=$cmd->fetchAll();
                        foreach($genres as $genre){
                            echo'<option value ="' . $genre["genreId"].'">'.$genre['genre'].'</option>' ;
                        }
                    ?>
                </select>
            </fieldset>
            <button>Save</button>
        </form>
    </main>
</body>
</html>
