<?php session_start(); $titre = "GameStation" ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titre; ?></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php include("include/header.php") ?>
        <main id="mainPage">
            <section id='controls'>
                <h2>Filtres</h2>
                <form>
                    <input type='search' id='search' placeholder='rechercher un jeu'/>
                    <p>
                        <label for='priceFilterMin'><p>Prix (min)</p>
                            <input type="range" name='priceFilter' id='priceFilterMin' max='999' min='5' step='10'default='5'/>
                        </label>
                        <label for='priceFilterMax'><p>Prix (max)</p>
                            <input type="range" name='priceFilter' id='priceFilterMax' max='999' min='5' step='10'/>
                        </label>
                    </p>
                    <p id="priceValue"></p>
                    <p><label for="Jeux"><input type="radio" name="productType">Jeux</label></p>
                    <p><label for="Accessoire"><input type="radio" name="productType">Accessoire</label></p>
                    <p><label for="Console"><input type="radio" name="productType">Console</label></p>
                    <input type="reset" name="resetFilters" value="Annuler les filtres" id="resetFilters">
                </form>
            </section>
            <section>
                <div id="lastSeen">
                    <h3>Derniers produits vus:</h3>
                    <aside>
                        <img src="media/products/img1.jpg">
                        <img src="media/products/img5.jpg">
                        <img src="media/products/img8.jpg">
                        <img src="media/products/img15.jpg">
                    </aside>
                </div>
                <article id="dashboard">
                    <div id='dashTriangle'></div>
                    <div id='dashTab'>
                        <p>Bonjour <?php echo $_SESSION['pseudo']?></p>
                        <p>Votre panier contient 
                            <?php 
                            if (isset($_SESSION['panier'])){ 
                                echo $SESSION['nbArticles'];
                            } else {
                                echo 0;
                            }
                            ?>
                            articles
                            <form method="POST" action='index.php'>
                                <button id='openPanier'>Voir le Panier</button>
                                <input type='submit' name='logOut' value='Deconnexion'>
                                <?php if(isset($_POST['logOut'])){session_destroy();}?>
                            </form>
                        </p>
                    </div>
                </article>
                <article id='productView'>
                    <h2>Nos jeux</h2>
                    <?php include('include/products.php');?>
                </article>
            </section>
        </main>
        <footer>
            <?php include("include/footer.php") ?>
        </footer>
        
        <section id="lightbox">
            <img id="lightboxImg" src="">
        </section>
        <script src="js/script.js"></script>
    </body>
</html>