<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saving Genre...</title>
</head>
<body>
    <?php
        //new genre to be added
        $genre=$_POST['genre'];

        //connect to the database
        $db=new PDO('mysql:host=172.31.22.43;dbname=Spencer1178551','Spencer1178551','ST3BJVqAAF');
        //set up SQL statement
        $sql="INSERT INTO genre (genre) VALUES(:status)";
        //input new genre into SQL statement
        $cmd=$db->prepare($sql);
        $cmd->bindParam(':genre',$genre,PDO::PARAM_STR,25);
        //execute SQL statement
        $cmd->execute();
        //disconnect
        $db=null;
        //Confirm
        echo 'Genre Saved'
    ?>
</body>
</html>