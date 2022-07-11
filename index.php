<?php
// pour determiner notre fuseau horaire = date_default_timezone_get() 
date_default_timezone_set('Europe/Paris');

require './function/function.php';
require './includes/header.php';
require './includes/main.php';
require './includes/footer.php';
// _once = ça le fait qu'une fois 
// require = pareil mais stricte une erreur et plus rien marche include meme si erreur ça passe

echo $_SERVER["SERVER_SOFTWARE"];

// dump($_SERVER);