<?php 
    $pageTitle = "Bibliothèque de l'E2C";
    $pageSubtitle = "Qu'est-ce que c'est ?"; 
    $navList = [
        [
            "label" => "Bibliothèque",
            "path" => "../controller/librarycontroller.php"
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


    require_once("../view/homeview.php");

?>

