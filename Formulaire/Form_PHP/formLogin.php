<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors[]=array();
    if(empty($_POST["email"])) {
        $errors[] = "Email is required";
    }
    if(empty($_POST["password"])) {
        $errors[] = "Password is required";
    }

    //récupération des variables
    if(isset($_POST["email"]) && isset($_POST["password"])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        //validation
        if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z\d\\-_]+$/", $password)){
            //sanitisation
            $email=filter_var($email, FILTER_SANITIZE_EMAIL);
            $password = filter_var($password,FILTER_SANITIZE_STRING);

            
        }
        else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors[]="Warning: the format of the e-mail address is incorrect";
            }
            if (!preg_match("/^[a-zA-Z\d\\-_]+$/", $password)){
                $errors[]="Warning: incorrect password. The format of the password is incorrect.";
            }
        }
    }
    foreach ($errors as $error) {
        echo"<script> alert('".$error."') </script>";
    }

    header("Refresh:0; url=../Form_Html/addFormLogin.html");
}

?>