<?php
// pour determiner notre fuseau horaire = date_default_timezone_get() 
date_default_timezone_set('Europe/Paris');

require_once './function/function.php';
require_once './includes/header.php';
require_once './includes/main.php';
require_once './includes/footer.php';
// _once = ça le fait qu'une fois 
// require = pareil mais stricte une erreur et plus rien marche include meme si erreur ça passe

echo $_SERVER["SERVER_SOFTWARE"];

dump($_SERVER);