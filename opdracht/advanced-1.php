<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nassim PHP advanced eindopdracht</title>
</head>
<body>
<center>
 <form name="invoer" action="advanced-2.php" method="post">
    <option>tekst-kleuren</option>
    <select name="tekst-kleuren" id="tekst-kleuren">
    <?php $kleuren = array ("pink", "cyan", "green", "black", "brown", "red");
    foreach($kleuren as $kleur){
        echo "<option value = $kleur> $kleur</option>"; }
  
 ?>
 </select>
 <option>achtergrond-kleuren</option>
 <select name="achtergrond-kleuren" id="achtergrond-kleuren">
     <?php $kleuren = array(" yellow", "blue", "purple", "black", "orange", "pink"); 
     foreach($kleuren as $achtergrond_color){
         echo "<option value = $achtergrond_color>$achtergrond_color</option>";
     }
     ?>

 </select>  
 <div>
   <option>tabel-bord (px)</option>
  <input type="text" name="tbname">
   </div>
    <div>
    <option>table-padding (px)</option>
  <input type="text" name="padding">
    </div>
   </div>
    <div> <input type="submit" name="submit" value="verstuur">
         </div>
 <form>

    </center>
</body>
</html>
