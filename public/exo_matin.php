<?php

if (!empty($_POST)) {
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













}