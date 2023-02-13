<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST["email"])) {
        $error_email = "Email is required";
    }
    if(empty($_POST["pasword"])) {
        $error_password = "Password is required";
    }

    //récupération des variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    $error = false;

    //validation
    if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^[a-zA-ZÀ-ÖØ-öø-ÿ\s-]$/', $email)){

    }
}

?>