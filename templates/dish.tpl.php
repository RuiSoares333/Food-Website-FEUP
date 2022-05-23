<?php
    declare(strict_types = 1);

    function outputDishes(array $dishes) {?>
        <section id="favDishes">
            <h1>Your Favorite Dishes</h1>
        <?php foreach($dishes as $dish){
            outputDish($dish);
        }?>
        </section>
    <?php }

    function outputDish(Dish $dish){ ?>
        <article data-id = <?= $dish->id?>>
            <img src = "https://picsum.photos/200?<?= $dish->id?>">
            <p><?= $dish->name?></p>
            <p><?= $dish->price?>€</p>
        </article>
    <?php }

    function outputCategoryDishes(array $category, array $dishes){ ?>
        <section id = <?= $category['category']?>>
            <h1><?= $category['category']?></h1>
            <?php
                foreach ($dishes as $dish)
                    outputDish($dish);
            ?>
        </section>

    <?php }
?>