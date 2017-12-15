<article class="property">
                        <a href="#">
                            <img src="images/<?php echo $logement["image"]; ?>" alt="<?php echo $liste_logements[0]["titre"]; ?>">
                            <footer class="overlay">
                                <div class="info">
                                    <div class="tag <?php echo ($logement["prix"] < 350000) ? "reduc" : ""; ?>">
                                         <?php $prixchunk = trim(strrev(chunk_split(strrev($logement["prix"]),3, ' '))); ?>
                                        <?php echo $prixchunk; ?> €
                                    </div>
                                    <h3><?php echo $logement["titre"]; ?></h3>
                                </div>
                                <div class="more-info">
                                    <div class="property-info">
                                        <i class="fa fa-calendar"></i>
                                        <?php echo $logement["date_creation"]->format("d/m/Y"); ?>
                                    </div>
                                    <div class="property-info">
                                        <i class="fa fa-tag"></i>
                                        <?php echo $logement["type"]; ?>
                                    </div>
                                    <div class="property-info">
                                        <i class="fa fa-expand"></i>
                                        <?php echo $logement["taille"]; ?>m2
                                    </div>
                                    <div class="property-info">
                                        <i class="fa fa-bed"></i>
                                        <?php echo $logement["nb_chambres"]; ?>
                                    </div>
                                </div>
                            </footer>
                        </a>
                    </article>

