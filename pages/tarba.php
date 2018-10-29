<?php
    include "../db/f-connect.php";
    include "../db/f-script.php";

?>

<!-- Container Articles -->
<div class="col-sm-12" id="container_article">
    
    
    <?php
    // On récupère tout le contenu de la table posts
    $reponse = $db->query('SELECT title, content, category_id FROM post WHERE category_id=\'4\'');

    // On affiche chaque entrée une à une
    while ($donnees = $reponse->fetch())
    {
        ?>
        <p>
            <strong>Titre</strong> : <?php echo $donnees['title']; ?><br />
            <br />
            <?php echo $donnees['content']; ?><br />
            de la catégorie : <?php echo $donnees['category_id']; ?>
        </p>
        <?php
    }

    $reponse->closeCursor(); // Termine le traitement de la requète
    ?>

</div>
            