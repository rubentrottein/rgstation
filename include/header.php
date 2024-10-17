<header id="top">
    <section>
        <h1>
            <?php 
                if($titre){ 
                    echo $titre;
                } else { 
                    echo "Titre à définir";
                }
                date_default_timezone_set('Europe/Paris'); 
            ?>
        </h1>
        <div></div>
    </section>
    <nav>
        <a href="../index.php">Accueil</a>
        <a href="index.php">GameStation</a>
        <a href="profile.php">Profil</a>
        <a href="login.php">Inscription</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>