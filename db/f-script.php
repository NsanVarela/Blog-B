<?php

/********** By NSanV - 24/07/2018 **********
 * 
 *** SYSTEM
 *  
 *      Variables :
 *          $perPage : nbre d'articles par page
 *          $total : nbre total d'articles
 *          $nbPage : nbre total de pages
 *          $current : n° de page en cours
 *          $firstOfPage : n° de l'index du 1er article de la page en cours
 * 
 *******************************************/


// User feature : nbre d'articles par page  !!! If used, comment $perPage !!!
    // if(isset($_GET['pp']) && !empty($_GET['pp']) && ctype_digit($_GET['pp']) == 1) {
    //     $perPage = $_GET['pp'];
    // } else {
    //     $perPage = 4;
    // }

// Détermine le nbre d'article par page souhaité
    $perPage = 16;

// Requète database
    $req = $db->query('SELECT COUNT(*) AS total FROM post WHERE category_id=\'1\' ORDER BY date DESC');
    $result = $req->fetch();
    $total = $result['total'];
    // echo $total;
    

// Calcul du nombre de pages
    $nbPage = ceil($total / $perPage); // arrondie au nombre entier supérieur
    // echo $nbPage;

// Connaitre la page en-cours
    if (isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p']) == 1){
        // Si p est définie dans l'url, que ce n'est pas vide et ce sont des chiffres
        if ($_GET['p'] > $nbPage) {
            // on vérifie que le nombre de page n'est pas supérieur au nombre de pages existantes
            $current = $nbPage;
        } else {
            $current = $_GET['p'];
        }
    } else {
        $current = 1;
    }
    // echo $current;

// Détermine l'index du 1er article de la page en cours
    $firstOfPage = ($current-1)*$perPage;
    // echo $firstOfPage;
    $reqPosts = $db->query("SELECT * FROM post ORDER BY id ASC LIMIT $firstOfPage, $perPage");

// Historique des articles
    $res = $db->query('SELECT * FROM post WHERE category_id=\'1\' ORDER BY date DESC');




/********** By NSanV - 29/08/2018 **********
 * 
 *** PHOTO

 */
  
?> 

