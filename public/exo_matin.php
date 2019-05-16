<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    var_dump($_POST);

    ///LE NOM
    if (!array_key_exists('name', $_POST)) {
        var_dump('Il faut remplir le nom !!');

     ////La non-nullité
    } elseif ($_POST['name'] === "") {
        var_dump('Il faut remplir le nom !');

     ////Valeur Max (255)
    } elseif (strlen($_POST['name'])> 255) {
        var_dump("Le nom est trop long !");
    }

    ///LA DESCRIPTION
    if (!array_key_exists('description', $_POST)) {
        var_dump('Il faut remplir la description !!');

        ////La non-nullité
    } elseif ($_POST['description'] === "") {
        var_dump('Il faut remplir la description !');

        ////Valeur Max (255)
    } elseif (strlen($_POST['description'])> 65535) {
        var_dump("La description  est trop longue !");
    }


    // Le prix

    if(!array_key_exists('prix', $_POST)) {
        var_dump("Merci d'entrer une valeur");
    } elseif ($_POST['prix'] === '') {
        var_dump("Valeur non reconnue");
    } elseif(!is_numeric($_POST['prix'])) {
        var_dump('valeur inccorect');
    } else {
        $_POST['prix'] = floatval ($_POST['prix']);
        if ($_POST['prix'] < 0) {
            var_dump("Le prix ne peut-être inférieur à 0");
        }
        if ($_POST['prix'] > 1000) {
            var_dump("Le prix ne peut-être supérieur à 1000€");
        }
    }

    if(!array_key_exists('publication', $_POST)){
        $_POST['publication'] = false;
    } else {
        $_POST['publication'] = true;
    }
var_dump($_POST);

    if (!array_key_exists("date", $_POST)) {
        var_dump("veuillez définir une 'key'");
    } elseif ($_POST['date'] === '') {
        var_dump("veuillez entrer une date");
    } else{
        $alex = explode("-", $_POST['date']);
        if (sizeof($alex) !== 3){
            var_dump("veuillez entrer une date correct");
        }elseif (!checkdate($alex[1], $alex[2], $alex[0])){
            var_dump("veuillez entrer une date correct!");
        }
    }
    if(!array_key_exists('nombre', $_POST)) {
        var_dump("Merci d'entrer un nombre de vues");
    } elseif ($_POST['nombre'] === '') {
        var_dump("Le nombre de vues est nul !");
    } elseif(!is_numeric($_POST['nombre'])) {
        var_dump('valeur incorrecte du nombre de vues');
    } else {
        $_POST['nombre'] = intval ($_POST['nombre']);
        if ($_POST['nombre'] < 0) {
            var_dump("Le nombre de vues ne peut-être inférieur à 0");
        }
        if ($_POST['nombre'] > 19E19) {
            var_dump("Le nombre de vue ne peut-être supérieur à 19E19");
        }
    }

}