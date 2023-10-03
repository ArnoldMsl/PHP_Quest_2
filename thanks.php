<?php

$errors=[];

if ($_SERVER["REQUEST_METHOD"]==="POST"){

    if (!isset($_POST["user_name"]) || trim($_POST["user_name"]) === ""){
        $errors[]="le nom est obligatoire";
    }

    if (!isset($_POST["user_email"]) || trim($_POST["user_email"]) === "" || (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL))){
        $errors[]="un email valide est obligatoire";
    }

    if (!isset($_POST["user_message"]) || trim($_POST["user_message"]) === ""){
        $errors[]="le message est obligatoire";
    }

    if (!isset($_POST["user_number"]) || trim($_POST["user_number"]) === ""){
        $errors[]="le numéro est obligatoire";
    }

    if(count($errors) === 0) { ?>
        <div><?php echo "Merci " . $_POST['user_name'] . " de nous avoir contacté à propos de " . $_POST['sujet']  . 
"Un de nos conseillers vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_number'] . 
" dans les plus brefs délais pour traiter votre demande : " .  $_POST['user_message']; ?></div><?php
     }
    else {
        foreach ($errors as $error) {
            ?><div><?php echo $error; ?><div><?php
        }
    
    }

}

?>