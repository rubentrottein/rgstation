<?php session_start(); $titre = "Produits" ?>
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
        <main>
            <section id="productList">
            <h2>Liste des produits</h2>
            <details open><summary>Liste des produits</summary>
                    <table>
                        <thead>
                            <th>id</th>
                            <th>name</th>
                            <th>console</th>
                            <th>price</th>
                            <th>desc</th>
                            <th>img</th>
                        </thead>
                        <tbody id="productTable">
                        </tbody>
                    </table>
                </details>
            </section>
            <section id="membersList">
                <h2>Liste des membres</h2>
            </section> 
            <section>
                <details>
                    <summary>Exemple d'objets php</summary>
                <?php
                class Personne{
                    private $prenom;
                    private $nom;
                    public function __construct($prenom, $nom){
                        $this->setPrenom($prenom);
                        $this->setNom($nom);
                    }
                    public function getPrenom(){
                        return $this->prenom;
                    }
                    public function getNom(){
                        return $this->nom;
                    }
                    public function setPrenom($prenom){
                        return $this->prenom=$prenom;
                    }
                    public function setNom($nom){
                        return $this->nom=$nom;
                    }
                }
                $mitchell = new Personne("John", "Badger");
                $arrayAsso=["niveau"=>"Level 0","niveau1"=>"level 1"];
                echo $mitchell->getPrenom(). " " . $mitchell->getNom();
                ?>
                </details>
            </section>
        </main>
        <?php include("include/footer.php") ?>
        <script src='js/products.js'></script>
    </body>
</html>