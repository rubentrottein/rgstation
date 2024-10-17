
<?php session_start(); $titre = "Inscription / Connexion" ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titre; ?></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php 
            include("include/header.php");
            if(isset($_SESSION['pseudo'])){
                echo "<a href='panier.php'>Mon panier</a>";
                echo "<a href=". session_destroy() . ">Déconnexion</a>";
            } 
        ?>
        <main id="login">
            <section>
                <h2>S'inscrire</h2>
                <form action="profile.php" method="POST">
                    <p><label for="pseudo">Choisissez un Pseudo
                        <input type="text" name="pseudo" id="pseudo" />
                    </label></p>
                    <p><label for="password">Choisissez un Mot de passe
                        <input type="password" name="password" id="password" />
                    </label></p>
                    <input type ='checkbox' name='status' id='status' checked hidden />
                    <input type ='text' name='date' id='date' value='<?php echo date('j/m/Y');?>' hidden />
                    <input type="submit">
                </form>
            </section>
            <section>
                <h2>Déjà inscrit ? Connectez vous!</h2>
                <form action="profile.php" method="POST">
                    <p><label for="pseudo">Entrez Votre Pseudo
                        <input type="text" name="pseudo" id="pseudo" />
                    </label></p>
                    <p><label for="password">Entrez votre Mot de passe
                        <input type="password" name="password" id="password" />
                    </label></p>
                    <input type ='checkbox' name='status' hidden />
                    <input type="submit">
                </form>
            </section>
        </main>
        <?php include("include/footer.php") ?>
    </body>
</html>