<?php
session_start();
if (empty($_SESSION['loginname'])) {
    header('Location:login.php');
}

require 'inc/head.php';
require 'inc/data/products.php';
?>

<section class="cart">
    <h3>Your choice :</h3>
    <?php
    if (!empty($_SESSION['cart'])) :
        foreach ($catalog as $key => $product) :
            if (in_array($key, $_SESSION['cart'])) : ?>
                <div class="row">

                    <h4><?= $key . ' ' . $product['name']; ?></h4>
                    <p><?= $product['description']; ?></p>
                </div>
    <?php
            endif;
        endforeach;
    endif ?>

</section>

<?php require 'inc/foot.php'; ?>