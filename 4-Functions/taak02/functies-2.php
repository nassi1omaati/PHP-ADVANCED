<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  function rekenUit(  $a,  $b, $c ){
$abc = $a + $b + $c;
return $abc;
}
echo "Als ik de getallen 7, 4 en 5 bij elkaar optel, is de uitkomst"." " .rekenUit(7,4,5);
echo "<br><br>";
echo "Als ik de getallen 21, 44 en 88 bij elkaar optel, is de uitkomst". " " .rekenUit(21,44,88);
echo "<br><br>";
echo "Als ik de getallen 20, 22 en 100 bij elkaar optel, is de uitkomst"." ".rekenUit(20,22,100);

?>
</body>
</html>