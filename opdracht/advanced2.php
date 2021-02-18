<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php echo $_POST["achtergrondkleur"] ?>;

        }
        table,tr,td {
                    padding: <?php echo $_POST["padding"] ?>px;
                    border: <?php echo $_POST["border"] ?>px solid black;
                }

    </style>
</head>

<body>
    <?php
    $info= array("naam"=>"emile", "achternaam"=>"ferati", "klas"=>"0D", "muziek"=>"hiphop", "woonplaats"=>"muiden", "sport"=>"voetbal",)

   ?> 
</body>
</html>