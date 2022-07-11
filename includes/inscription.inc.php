<h1>inscription</h1>

<!-- <div id=contener>
    <div class="carte"></div>
    <div class="arriere"></div>
    <div class="droite"></div>
    <div class="gauche"></div>
    <div class="bas"></div>
    <div class="haut"></div>
</div> -->

<form class="generated-form"  method="Post" action="index.php?page=inscription"  target="_self">
<fieldset>
 
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" placeholder="John"  ><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" placeholder="Doe"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" placeholder="youremail@gmail.com"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <label for="password1">Vérification mot de passe :</label><br>
        <input type="password" id="password1" name="password1" />
        <br><br>
  <input type="submit" value="Submit">
  <input type="hidden" name="oui">
  
</fieldset>
</form>
<?php

if (isset($_POST['oui'])) {
    $nom = isset($_POST['fnom']) ? htmlentities(trim($_POST['fnom'])) : "";
    $prenom = isset($_POST['lprenom']) ? htmlentities(trim($_POST['lprenom'])) : "";
    $email = isset($_POST['email']) ? htmlentities(trim($_POST['email'])) : "";
    $mdp1 = isset($_POST['password']) ? htmlentities(trim($_POST['password'])) :  "";
    $mdp2 = isset($_POST['password1']) ? htmlentities(trim($_POST['password1'])) :  "";
  
    echo $nom . $prenom . $email . $mdp1 . $mdp2 ;

    $erreurs =[];

    if (strlen($nom)===0)
    array_push($erreurs, "veuillez saisir votre nom");

    if (mb_strlen($prenom)===0)
    array_push($erreurs, "veuillez saisir votre prénom");

    if(mb_strlen($email)===0)
    array_push($erreurs,"veuillez saisir une adresse mail");

    elseif(!(filter_var($email,FILTER_VALIDATE_EMAIL)))
    array_push($erreurs, "mail pas bon");

    if (mb_strlen($mdp1) === 0 ||  mb_strlen($mdp2) ===0)
        array_push($erreurs, "ecrit 2x mdp");
    

    elseif ($mdp1 !== $mdp2)
        array_push($erreurs, "mdp pas pareil");
    

   $messageR ="<ul>";
for ($i=0; $i < count($erreurs) ; $i++) { 
    $messageR .="<li>";
    $messageR .= $erreurs[$i];
    $messageR .= "</li>";
}
   $messageR .="/<ul>";

   echo $messageR;
   
} else {
    echo "Je vien du future";
}


// dump($_POST)

?>