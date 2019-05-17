<?php
session_start();
require ('functions_game.php');


if (!isset($_SESSION['letter'])){
    $_SESSION['letter'] = createLetter();
    $_SESSION['cpt'] = 0;
}
var_dump("session " . $_SESSION['letter']);

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    if (!array_key_exists('lettre', $_POST)) {
        var_dump("Lettre n'existe pas !");
       // echo createLetter ();
    }elseif ($_POST['lettre'] === ''){
        var_dump("Veuillez entrer un caractère");
    }elseif ($_POST['lettre'] === $_SESSION['letter']){
        var_dump("Bravo !");
        unset($_SESSION["letter"]);
    }elseif ($_SESSION['cpt'] === 4){
        var_dump('Game over');
        unset($_SESSION["letter"]);
    }else {
        var_dump("retry !");
        $_SESSION['cpt'] = $_SESSION['cpt'] + 1;
    }

    var_dump($_SESSION['cpt']);
    var_dump($_POST['lettre']);
}

