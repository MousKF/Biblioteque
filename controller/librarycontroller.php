<?php 
    $pageTitle = "Livres et Histoire";
    $pageSubtitle = "la Bibliothèque de l'E2C"; 
 $navList = [
        [
            "label" => "Acceuil",
            "path" => "../controller/homecontroller.php"
        ],
        [
            "label" => "Détente",
            "path" => "../controller/gamecontroller.php"
        ]
    ];
    //var_dump($navList);
    $navList[] = [
        "label" => "Connecter",
        "path" => "#"
    ];
    //var_dump($navList);
    require_once("../view/libraryview.php");

?>
