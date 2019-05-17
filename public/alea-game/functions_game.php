<?php

function createLetter () : string {
    $alphabet = range('a','z');
    $chiffre = rand(0,25);
    return $alphabet[$chiffre];
}

