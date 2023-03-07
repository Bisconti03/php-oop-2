<?php 

include_once __DIR__ . '/classes/accessories.php';
include_once __DIR__ . '/classes/product.php';
include_once __DIR__ . '/classes/category.php';
include_once __DIR__ . '/classes/food.php';
include_once __DIR__ . '/classes/toys.php';


$category = [
    'Cane' => new Categorie('Cane', 'fa-solid fa-dog'),
    'Gatto' => new Categorie('Gatto', 'fa-solid fa-cat')
];




$FoodProducts = [
    new Food('https://www.hillspet.it/content/dam/pim/hills/it_it/sd/pouch/sp-adult-small-mini-chicken-vegetables-stew-pouch-productShot_zoom.jpg', 'Adult Small & Mini spezzatino per cani',10.22,$category['Cane'],'80','pollo e verdure miste'),

    new Food ('https://www.hillspet.it/content/dam/pim/hills/it_it/sd/dry/sp-canine-science-plan-culinary-creations-medium-adult-duck-potatoes-dry-productShot_zoom.jpg','Culinary Creations Medium Adult Alimento Per Cani',7.50,$category['Cane'],'1200','anatra e patate'),
];


$AccessoryProducts = [
    new Accessories('https://cdn.shopify.com/s/files/1/0524/0658/3462/products/UPSTD2128BN_600x.jpg?v=1676455798','Impermeabile imbottito Blu Navy',48.22,$category['Cane'],'100% poliestere riciclato','S-XL'),

    new Accessories('https://shop-cdn-m.mediazs.com/bilder/graffiatoio/onda/3/400/jan_mix_3_71_3.jpg','Graffiatoio Onda',8.19,$category['Gatto'],'cartone ondulato','L 48 x P 19 H 7 cm' ),
];


$ToysProducts = [
    new Toys('https://shop-cdn-m.mediazs.com/bilder/cannetta/gioco/con/topino/sonoro/1/400/14198_PLA_Karlie_Spielangel_Soundmaus_1.jpg','Cannetta gioco con topino sonoro',3.50,$category['Gatto'],'Canna da gioco con favoloso chip sonoro','50cm'),

    new Toys('https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg','Trixie corda gioco per cani',1.00,$category['Cane'],'Corda gioco con nodi di Trixie per cani, perfetta per il tira e molla','15cm')
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animalshop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<main class="bg-success bg-gradient">
    <div class="container">
        <h1 class="text-center fw-bold" style="font-size: 5rem;">Animalshop</h1>
        
        <div class="row">
            <?php
            
            foreach ($FoodProducts as $product) {
                 
            ?>
            <div class="col-3 mt-3">
                <div class="card mb-4" style="width: 18rem; height: 35rem;">
                    <img  style="height: 300px;" src="<?php echo $product->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $product->name ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $product->category->name ?>
                            <i class="<?php echo $product->category->icon ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $product->price ?> €
                        </h5>
                        <p class="card-text opacity-75">
                            peso:
                            <?php echo $product->weight ?> g
                        </p>
                        <p class="card-text opacity-75">
                            ingredienti:
                            <?php echo $product->ingredients ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                
            }
            ?>


           
            <?php

            foreach ($ToysProducts as $product) {
                
            ?>
            <div class="col-3 mt-3">
                <div class="card mb-4" style="width: 18rem; height: 35rem;">
                    <img class="progress" style="height: 300px;" src="<?php echo $product->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $product->name ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $product->category->name ?> 
                            <i class="<?php echo $product->category->icon ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $product->price ?> €
                        </h5>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $product->characteristics?>
                        </p>
                        <p class="card-text opacity-75">
                            Dimensioni:
                            <?php echo $product->dimensions ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                
            }
            ?>


            <?php

            foreach ($AccessoryProducts as $product) {
                
            ?>
            <div class="col-3 mt-3">
                <div class="card mb-4" style="width: 18rem; height: 35rem;">
                    <img class="progress" style="height: 300px;" src="<?php echo $product->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $product->name ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $product->category->name ?> 
                            <i class="<?php echo $product->category->icon ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $product->price ?> €
                        </h5>
                        <p class="card-text opacity-75">
                            materiale:
                            <?php echo $product->material?>
                        </p>
                        <p class="card-text opacity-75">
                            Dimensioni:
                            <?php echo $product->dimensions ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                
            }
            ?>
        </div>
    </div>
</main>


</body>
</html>