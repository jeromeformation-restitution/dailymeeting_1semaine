<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$toto = "Salut"; // string
$tata = 10; // number
$titi = false; // boolean

echo $toto;
echo $tata;
echo "<br>";
echo (int)$titi;

$temp=55;
if ($temp<=0){
  echo "il fait froid";
}
elseif ($temp<=20){
    echo "il fait moyen";
}
elseif ($temp<50){
    echo "il fait chaud";
}
else{
    echo "il fait trés chaud";
}
echo "<hr>";
$jourSemaine = 'mardi';

switch ($jourSemaine) {
    case 'Vendredi':
        echo'C\'est bientôt le weekend :) ';
       break;
    case 'Samedi':
    case 'dimanche':
        echo 'Nous sommes le weekend';
        break;
    default :
        echo"Ce n'est pas le weekend";
}

echo "<ul>";
    for ($i = 0; $i < 10; $i++){
        echo "<li>Puce $i</li>";
    }
echo "</ul>";
?>

</body>
</html>