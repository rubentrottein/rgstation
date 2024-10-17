<?php 
    session_start();
    $titre="Page de tests";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title?></title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <style>
        main article:nth-child(2){text-align: center;}
        marquee{
            font-size:3rem;
            color: lightgreen;
            background: black;
        }
        </style>
    <?php include("include/header.php");?>  
    <main>
        <?php include("include/404.php");?>      
    </main>
    <?php include("include/footer.php");?>      
    </body>
</html>