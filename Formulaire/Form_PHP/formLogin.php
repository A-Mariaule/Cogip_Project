<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST["email"])) {
        $error_email = "Email is required";
    }
    if(empty($_POST["pasword"])) {
        $error_password = "Password is required";
    }

    //récupération des variables
    if(isset($_POST["email"]) && isset($_POST["password"])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        //validation
        if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z\d-_]+$/", $password)){
            //sanitisation
            $email=filter_var($email, FILTER_SANITIZE_EMAIL);
            $password = filter_var($password,FILTER_SANITIZE_STRING);

            echo "<script>
            let url='http://localhost:8001/users';
            let option = {
              method: 'GET',
              },
            }
            fetch(url,option)
            .then(response => response.json())
              .then(data => console.log())
            </script>";
        }
        else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error_email="<p class='errorMsg'>Warning: the format of the e-mail address is incorrect</p>";
            }
            if (!preg_match("/^[a-zA-Z\d-_]+$/", $password)){
                $error_password="<p class='errorMsg'>Warning: incorrect password. The format of the password is incorrect.</p>";
            }
        }
    }
    echo (isset($error_email))? $error_email: '';
    echo (isset($error_password))? $error_password: '';
}

?>