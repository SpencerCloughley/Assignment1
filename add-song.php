<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Add Song</h1>
        <form action="saved.php" method="post">
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
                <label for="genre">Genre: *</label>
                <select name="genre" id="genre">
                    
                </select>
            </fieldset>
        </form>
    </main>
</body>
</html>