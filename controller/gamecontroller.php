<?php 
    $pageTitle = "Espace détente";
    $pageSubtitle = "We love javascript!"; 
 $navList = [
        [
            "label" => "Bibliothèque",
            "path" => "../controller/librarycontroller.php"
        ],
        [
            "label" => "Acceuil",
            "path" => "../controller/homecontroller.php"
        ]
    ];
    //var_dump($navList);
    $navList[] = [
        "label" => "Connecter",
        "path" => "#"
    ];
    //var_dump($navList);
    require_once("../view/gameview.php");

?>
