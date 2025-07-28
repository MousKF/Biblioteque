<?php

require_once('../model/Model.php');

$bdd = new Model();

$email =  htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

if(isset($email) && $email !=null) {

} else {
    $message = "Mail obligatoire";
    header ("location: ../controller/homecontroller.php?message=$message");
}

?>