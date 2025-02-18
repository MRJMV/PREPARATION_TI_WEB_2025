<?php
if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case "aboutme":
            $title="A propos de moi";
            include "../templates/aproposView.php";
            break;
        case "history":
            $title="Mon histoire";
            include "../templates/histoireView.php";
            break;
        case "contact":
            $title="Me contacter";
            include "../templates/contactView.php";
            break;
        default:
        $title="Erreur 404";
            include "../templates/erreur404View.php";
    }
    
} else {
    $title="Accueil";
    include "../templates/accueilView.php";
}
