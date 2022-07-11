<?php

function dump($x){
    echo  "<pre>";
 var_dump($x);
echo  "</pre>";
 
};


function autoInclude(string $file): void {
    $includedFiles = glob("./includes/*.inc.php");
    $file = "./includes/" . $file . ".inc.php";

    if (count($includedFiles) !== 0 && in_array($file, $includedFiles)) {
        require_once $file;
    } else {
        require_once './includes/accueil.inc.php';
    }
}


function validText($er, $data, $key, $min, $max)
{
    if(!empty($data)) {
        if(mb_strlen($data) < $min) {
            $er[$key] = 'min '.$min.' caractères';
        } elseif(mb_strlen($data) >= $max) {
            $er[$key] = 'max '.$max.' caractères';
        }
    } else{
        $er[$key] = 'Veuillez renseigner ce champ';
    }
    return $er;
}


function getValue($key,$data = null){
    if(!empty($_POST[$key])) {
        return $_POST[$key];
    } else {
        if(!empty($data)) {
            return $data;
        }
    }
    return '';
}

function cleanXss(string $key)
{
    return trim(strip_tags($_POST[$key]));
}
