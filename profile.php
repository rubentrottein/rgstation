<?php session_start(); $titre = "Mon Profil" ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titre; ?></title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/profile.css">
    </head>
    <body>
        <?php include("include/header.php") ?>
        <main>
        <h2>Mes Informations</h2>
            <?php 
                if(isset($_SESSION["pseudo"])){
                    echo "membre existant : " . $_SESSION["pseudo"];
                    $_SESSION["date"] = 'antérieure';
                    $_SESSION["status"] = "Ancien Membre";
                } else if(isset($_POST['pseudo'])){
                    $_SESSION["pseudo"] = $_POST['pseudo'];
                    $_SESSION["password"] = $_POST['password'];
                    $_SESSION["date"] = $_POST['date'];
                    $_SESSION["status"] = "Membre";
                } else {
                    echo "<b>Aucun utilisateur connecté</b>";
                }
                
                if (isset($_POST['status'])){
                    $_SESSION["status"] = "Nouveau Membre";
                }
            ?>
            <h2><?php echo $_SESSION["pseudo"]; ?></h2>
            <p>Mot de passe provisoire = 
                <?php echo $_SESSION["password"];?>
            </p>
            <p>Statut = 
                <?php 
                    echo $_SESSION["status"];
                ?>
            </p>
            <p>Date d'inscription = 
                <?php echo $_SESSION['date'];?>
            </p>
        </main>
        <?php include("include/footer.php") ?>
    </body>
</html>