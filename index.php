<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/index.css">
        <title>Yaran Adventure</title>
    </head>
    <body>
        <main>
            <div class="section">
                <?php
                    $page = "{$_GET['page']}";

                    if($page == 1) {
                        $img = "assets/images/bd/1.jpg";
                    } else if($page == 2) {
                        $img = "assets/images/bd/2.jpg";
                    } else if($page == 3) {
                        $img = "assets/images/bd/3.jpg";
                    } else if($page == 4) {
                        $img = "assets/images/bd/4.jpg";
                    } else if($page == 5) {
                        $img = "assets/images/bd/5.jpg";
                    } else if($page == 6) {
                        $img = "assets/images/bd/6.jpg";
                    } else if($page == 7) {
                        $img = "assets/images/bd/7.jpg";
                    } else if($page == 8) {
                        $img = "assets/images/bd/8.jpg";
                    } else if($page == 9) {
                        $img = "assets/images/bd/9.jpg";
                    } else if($page == 10) {
                        $img = "assets/images/bd/10.jpg";
                    } else if($page == 11) {
                        $img = "assets/images/bd/11.jpg";
                    } else if($page == 12) {
                        $img = "assets/images/bd/12.jpg";
                    } else if($page == 13) {
                        $img = "assets/images/bd/13.jpg";
                    } else if(!$page == 14) {
                        $page = 0;
                    }
                    $nextPage = $page + 1;
                    $beforePage = $page - 1;
                    $showNext = "show";
                    $showBefore = "show";

                    if($page == 0) {
                        echo('<div class="image"><br/><h2>Introduction</h2><br><div><p>Après la mort de ses parents,</p><p>Yaran se retrouva seul pour gérer la ferme familial,</p><p>Enfin seul est un bien grand mot,</p><p>Avec son compagnon robot Hèlyx plutôt.</p></div></div>');
                    } else if($page == 7) {
                        echo('<div class="image-small"><img class="img--small-7" src="' . $img . '"/></div>');
                    } else if($page == 9) {
                        echo('<div class="image-small"><img class="img--small-9" src="' . $img . '"/></div>');
                    } else if($page == 12) {
                        echo('<div class="image-small"><img class="img--small-12" src="' . $img . '"/></div>');
                    } else if($page == 14) {
                        echo('<div class="image"><h3>The End!</h3>');
                    } else if(!$page == 0 || !$page == 7 || !$page == 9 || !$page == 12 || !$page == 14) {
                        echo('<img class="image" src="' . $img . '"/>');
                    }

                    if($nextPage > 14) {
                        $showNext = "no-show";
                    } else if($beforePage < 0) {
                        $showBefore = "no-show";
                    }
                ?>
            </div>

            <div class="choice">
                <a class="link left <?php echo($showBefore) ?>" href="?page=<?php echo($beforePage) ?>">
                    <i class="fa-solid fa-left-long" style="color: #ffffff;"></i>
                </a>
                <a class="link right <?php echo($showNext) ?>" href="?page=<?php echo($nextPage) ?>">
                    <i class="fa-solid fa-right-long" style="color: #ffffff;"></i>
                </a>
            </div>
        </main>

        <script src="https://kit.fontawesome.com/1d478519ea.js" crossorigin="anonymous"></script>
    </body>
</html>