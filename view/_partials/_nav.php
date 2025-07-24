<nav>

        <img id="logo" src="./src/logo2.png" alt="Logo E2C">
        <div id="nav-bar">
    <?php  
        foreach($navList as $navButton) {?>
            <a class="nav-button" href=<?= $navButton["path"]?>><?=$navButton["label"]?></a>
        <?php 

        }
    ?>

        </div>

    </nav>