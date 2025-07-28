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
            echo("connection impossible =". $e->getMessage());
        }
       

        var_dump($this->bdd);
    }

    //définir les methodes
}