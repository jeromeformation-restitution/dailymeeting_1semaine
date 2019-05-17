<?php
require ('functions_game.php');
if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    if (array_key_exists('lettre', $_POST)) {
        var_dump($_POST['lettre']);
        echo createLetter ();
    }
}
