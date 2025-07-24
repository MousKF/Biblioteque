<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Zone</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../src/logo.png">
    <script src="../Javascript/Java.js" defer></script>
</head>
<body>
    <!-- Zone du menu, en haut de la page-->
    

    <?php
        require_once("../view/_partials/_header.php");
        require_once("../view/_partials/_nav.php");

    ?>
   
     <div id="main-game">
        <div id="user-interface">
            <div>
            <label for="user-number">Entre ton nombre ici!</label>
            <input id="user-number" name="user-number" type="number" placeholder="mets ton nombre ici!" min="1" max="150">
            </div>

            <input id="send-button" type="submit" value="Proposition!">
        </div>
        <div id="game-display">
            
        </div>

     </div>
</body>
</html>