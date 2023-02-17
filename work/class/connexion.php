<?php
class Connexion extends Dbh {
    
    private $utilisateur;
 
    public function __construct() {
       session_start(); // On démarre la session
       $this->utilisateur = isset($_SESSION['utilisateur']) ? $_SESSION['utilisateur'] : null;
    }
 
    public function connecter() {
       // Vérifier les informations d'identification
       $data = json_decode(file_get_contents('php://input'), true);
       $email = $data["email"];
       $password=$data["password"];
       $error = false;
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           header('Content-Type: application/json');
           echo json_encode(['error'=> 'L\'adresse email n\'est pas valide']);
           $error = true;
       }
       elseif(!preg_match("/^[a-zA-Z\d\\-_]+$/", $password)) {
           header('Content-Type: application/json');
           echo json_encode(['error'=> 'Le mot de passe ne peut contenir que des lettres , des chiffres et les caractères "-" et "_" .']);
           $error = true;

       }
       else{
           $email=filter_var($email, FILTER_SANITIZE_EMAIL);
           /*$password = filter_var($password,FILTER_SANITIZE_STRING);*/
       }
       if(!$error){
           $sql='SELECT * FROM users WHERE email= :email and password=:password';
           $resultat=$this->connect()->prepare($sql);
           $resultat->bindValue('email', $email);
           $resultat->bindValue('password', $password);
           $resultat->execute();
           $donnees=$resultat->fetchAll(PDO::FETCH_ASSOC);
           if (!empty($donnees)) {
                // Si les informations d'identification sont correctes, enregistrer l'utilisateur dans la session
                $_SESSION['utilisateur'] = $email;
                $this->utilisateur = $email;
                header('Content-Type: application/json');
                echo json_encode(['message'=> 'ok valide']);
           }
           else{
            header('Content-Type: application/json');
            echo json_encode(['error'=> 'non valide']);
           }
       }
    }
 
    public function deconnecter() {
       // Supprimer l'utilisateur de la session
       unset($_SESSION['utilisateur']);
       $this->utilisateur = null;
       if($this->utilisateur == null){
         header('Content-Type: application/json');
         echo json_encode(['message'=> 'déconnecté']);
       }
    }
 
    public function estConnecte() {
       // Vérifier si l'utilisateur est enregistré dans la session
       if($this->utilisateur != null){
         header('Content-Type: application/json');
         echo json_encode(['message'=> 'connecté']);
       }
       else{
         header('Content-Type: application/json');
         echo json_encode(['message'=> ' non connecté']);
       }
    }
 
    public function getUtilisateur() {
       return $this->utilisateur;
    }
 }

?>