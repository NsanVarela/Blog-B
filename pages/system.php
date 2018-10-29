<?php
    include "../db/f-connect.php";
    include "../db/f-script.php";

?>

                <!-- <div class="row"> -->
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        <!-- Container Articles -->
                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10" id="container_article">
            <!-- Récupération des posts -->
                        <div class="row bloc-cont">
                            <?php
                            while ($donnees = $reqPosts->fetch())
                            {
                            ?>
                                <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 hoverable" id="bloc-cont-system">
                                    <h2 class="art-title">
                                        <?php echo $donnees['title']; ?><br />
                                    </h2>
                                    <p class="art-cont">
                                        <?php echo substr($donnees['content'], 0, 60) . ' ...<br /><br />'; ?>
                                        <!-- Button trigger modal -->
                                        <a class="trigger gray lighten-6 hoverable" data-toggle="modal" data-target="#conditionModal">Lire la suite</a>
                                        <!-- Affichage ID article 
                                            <?php echo $donnees['id']; ?> 
                                        -->
                                    </p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
            <!-- End : Récupération des posts -->

                    </div>
                    <!-- End : Container Articles -->
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
                    <!-- </div> -->
                <div class="row bloc-pagination">
                <!-- Script pagination --> 
                    <ul class="pagination">
                        <!-- Bouton page précédente -->
                        <li class="page-item">
                            <a class="page-link <?php if($current == '1') { echo "disabled"; } ?>" 
                                href="?p=<?php if($current != '1') { echo $current-1; } else { echo $current; } ?>&&pp=<?php echo $_GET['pp']; ?>">&laquo;
                            </a>
                        </li>
                        <!-- Bouton page en-cours -->
                        <?php
                        for($i=1; $i<$nbPage; $i++) {
                            if ($i == $current) { // On vérifie que la page courante n'est pas un lien
                                ?>
                                    <li class="active page-item"><a class="page-link" href="?p=<?php echo $i ?>&&pp=<?php echo $_GET['pp']; ?>"><?php echo $i ?></a></li>
                                <?php
                            } else {
                                ?>
                                    <li class="page-item"><a class="page-link" href="?p=<?php echo $i ?>&&pp=<?php echo $_GET['pp']; ?>"><?php echo $i ?></a></li>
                                <?php
                            }
                        }
                        ?>
                        <!-- Bouton page suivante -->
                        <li class="page-item">
                            <a class="page-link <?php if($current == $nbPage) { echo "disabled"; } ?>" 
                                href="?p=<?php if($current != $nbPage) { echo $current+1; } else { echo $current; } ?>&&pp=<?php echo $_GET['pp']; ?>">&raquo;
                            </a>
                        </li>
                    </ul>
                <!-- End : Script pagination --> 
                </div>


