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

 
  <table border="$info" >
        <thead>
            <tr>
              <th>key</th>
              <th>value</th>
            </tr>
            </thead>
            <tbody>
            <?php
    
            $info2= array("naam"=>"naam", "achternaam"=>"achternaam", "klas"=>"klas", "muziek"=>"favoriete muziek", "woonplaats"=>"woonplaats");
            $info= array("naam"=>"emile", "achternaam"=>"Ferati", "klas"=>"0D", "muziek"=>"Pop", "woonplaats"=>"Muiden");
            

            function maakrij($info2){

            return $info2;
            }
        
             foreach($info2 as $index => $thing){

             echo "<tr><td> $thing </td><td> $info[$index] </td></tr>";
             }

        ?>
        
   
            </tbody>

    
   

</body>
</html>