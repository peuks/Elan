<?php

$product = $response['data'];
?>
<article>
    <h1>
        <?php
        echo $product->getName;
        ?>
    </h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque, laborum!</p>
    <p>
        <?= $product->getPrice(); ?>
    </p>
</article>