<?php 

class Model {
    //defenir ses proprietes  
    private PDO $bdd;

    //constructeur
    public function __construct()
    {
        try{
             $this->bdd = new PDO('mysql:host=localhost;dbname=pn_livres;charset=utf8','phpmyadmin','PNE2Cgrandlille');

        }catch(Exception $e) {
            $message = "connection impossible - réessayez ulterieurement";
            header("location: ../controller/homecontroller.php?message=$message");
        }
       

        
    }
public function getAllBooks(){
    //on ecrit la requete SQL dans une variable 
    $sql = "SELECT * FROM book_vw";
    // On applique cette requette sql dans une variable aussi ( cette ligne ne change jamais) 
    $query = $this->bdd->prepare($sql);
    // On execute la requete 
    $query->execute([]);
    // On recupere les resultats dans une variable -- deux option fetch ou fetchall
    $result = $query->fetchAll();
    // envoie des resultat
    return $result;
}
public function getUserByEmail($email) {
        //on ecrit la requete SQL dans une variable 
    $sql = "SELECT id, mail, mdp, user_name FROM user WHERE mail = :email";
    // On applique cette requette sql dans une variable aussi ( cette ligne ne change jamais) 
    $query = $this->bdd->prepare($sql);
    // On execute la requete 
    $query->execute([
        "email" => $email
    ]);
    // On recupere les resultats dans une variable -- deux option fetch ou fetchall
    $result = $query->fetch();
    // envoie des resultat
    return $result;

}

    //définir les methodes
}