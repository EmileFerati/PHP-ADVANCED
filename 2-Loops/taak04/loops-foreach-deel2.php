<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<select name="value" id="value">
<?php 
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");


foreach ($klassen as $value) {
    echo "<option> $value </option>";
}


?>
 </select>   


 <form>
    <input type="text" name="voornaam">
  </form>
</body>
</html>






