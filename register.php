<?php

include("includes/functions.php");
require("views/register.views.php");
require("config/database.php");

if (isset($_POST['register'])) {
    var_dump($_POST);
    echo '<h1 style="z-index=2;">'.$_POST.'</h1>' ;
    $errors = [];

    if (not_empty($_POST)) {
        extract($_POST);

        if(!preg_match("/^[a-zA-Z0-9_]+$/", $username)){
            $errors['username'] = "Le pseudo ne peut contenir que les caractères a(A)-z(Z) 0-9 et _";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Email invalide";
        }

        if(mb_strlen($password) < 6) {
            $errors['password'] = "Le mot de passe doit contenir au moins 6 caractères";
        }
        else if(!preg_match('/^[A-Z]/', $password) || !preg_match('/^[0-9]/', $password)){
            $errors['password'] = "Le mot de passe doit au moins contenir une majuscule et un chiffre";
        }
        else if($password !== $password_confirm){
                $errors['passord'] = "Les deux mots de passe ne correspondent pas";
        }
    
    } else {
        $errors['empty'] = "Veuillez remplir tous les champs svp";
    }

    if(count($errors) == 0){
        $query = $db->prepare("INSERT INTO Users(username, email, password) VALUES((?, ?, ?))");
        $query->execute([$username, $email, $password]);
    }
}
