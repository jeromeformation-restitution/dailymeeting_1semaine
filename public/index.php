<?php
include ('index2.php')
?>

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

echo "<ul>";
    $i = 0;
    while ($i < 10){
        echo "<li>Puce $i</li>";
        $i++;
    }
echo "</ul>";

    $fruits=["pamplemousses","pommes","poires"];

    echo "<ul>";
        foreach ($fruits as $i){
            echo "<li>$i</li>";
        }
    echo "</ul>";
  $table = [ "firstname"=>"john","lastname" => "doe", "age" => 41]

?>

<table>
    <thead>
    <tr>
        <?php
        foreach ($table as $key =>$i){
            echo "<th>$key</th>";
        }
      ?>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
        foreach ($table as $i){
            echo "<td>$i</td>";
        }
        ?>
    </tr>


    </tbody>


</table>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>