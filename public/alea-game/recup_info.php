<?php
require ('functions_game.php');

$alealetter = createLetter();

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    if (!array_key_exists('lettre', $_POST)) {
        var_dump("Lettre n'existe pas !");
       // echo createLetter ();
    }elseif ($_POST['lettre'] === ''){
        var_dump("Veuillez entrer un caractère");
    }elseif ($_POST['lettre'] === $alealetter){
        var_dump("Bravo !");
    }else {
        var_dump("retry !");
    }

    var_dump($_POST['lettre']);
}

