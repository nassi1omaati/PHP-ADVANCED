<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  style='background-color:<?php  echo $_POST["color"]; ?>';
>

Voornaam is: <?php  echo $_POST["Voornaam"]; ?> <br>
Achternaam :<?php echo $_POST["achternaam"];?><br>
Klas: <?php echo $_POST["klas"];?> <br>
leeftijd: <?php echo $_POST["leeftijd"];?> <br>
adres: <?php echo$_POST["adres"];  ?> <br>
plaatsnaam :<?php echo $_POST["plaatsnaam"];?> <br>
favoriete muziekband: <?php echo $_POST["muziek_band"];?> <br>
</body>
</html>