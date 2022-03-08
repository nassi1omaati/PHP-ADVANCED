<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nassim PHP advanced eindopdracht</title>
</head>
<body>
  <style>
    
body {
  color: <?= $_POST["tekst-kleuren"] ?>;
  background-color: <?= $_POST["achtergrond-kleuren"] ?>;
}
table,tr,td{
    border: <?= $_POST['tbname']?>px solid black;
    padding:<?= $_POST['padding']?>px;
}
</style>
<center>

 <?php function maakRij($mijngegevens1,$value){
     echo "<tr>
     <td>".$mijngegevens1."</td>
     <td>".$value."</td>
     </tr> ";
 }
 ?>
  <table>
   <?php
   $mijngegevens=array(
   "naam"=> "Nassim Omaati","Leefdtijd"=> 17,"artiest"=> "Kanye West","woonplaats"=>"Amsterdam","games"=> "dying light");
   foreach($mijngegevens as $mijngegevens1 => $value){
      maakRij($mijngegevens1,$value);
   }

   ?>
  </table>

</center>
</body>
</html>