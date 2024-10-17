<section id="products">
    <?php 
        $product = array (
            'id' => 0,
            'name' => 'Phantom Brave',
            'desc' => 'Tactical-RPG By Nippon Ichi Software',
            'console' => 'PS2',
            'price' => '59,90',
        );
    ?>
    <article>
        <aside>
            <figure>
                <img <?php echo "src='media/products/img" . $product['id'] . ".jpg' alt='". $product['name']."'";?> />
            </figure>
            <figcaption>
                <?php echo '<h3>' . $product['name'] . '</h3><p><b>' . $product['console'] .'</b></p><p>'. $product['price'] . '</p><p><i>' .  $product['desc'] . '</i></p>';
                ?>
            </figcaption>
        </aside>
        <button>Ajouter au panier</button>
    </article>
</section>