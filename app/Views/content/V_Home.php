<?php

use App\Models\M_Article;
use App\Models\M_Recipes;
$recModel = new M_Recipes();
$ingModel = new M_Article();
$recipe = $recModel->getAllrecipes();
$ing = $ingModel->getAllIngredients();
?>

<div class="container m-5">
    <div class="col-12">
        <h1 style="text-align: center;"> Bienvenue chez Nesti </h1>
    </div>
</div>
<section class="my-carousel p-3 mb-5 d-flex justify-content-center">
    <div id="carouselExampleControls" class="carousel slide w-75" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="width:350px;  height: 550px" src="https://static.750g.com/images/1200-630/87f2a344908bee01e052c6f60c7eb1af/gateau-d-anniversaire.jpg" class="d-block w-100" alt="myCarousel1">
            </div>
            <div class="carousel-item">
                <img style="width:350px;  height: 550px" src="https://www.hervecuisine.com/wp-content/uploads/2010/11/recette-crepes-730x520.jpg.webp" class="d-block w-100" alt="myCarousel2">
            </div>
            <div class="carousel-item">
                <img style="width:350px;  height: 550px" src="https://www.hervecuisine.com/wp-content/uploads/2020/05/recette-clafoutis-facile-1024x685.jpg.webp" class="d-block w-100" alt="myCarousel3">
            </div>
            <div class="carousel-item">
                <img style="width:350px;  height: 550px" src="https://res.cloudinary.com/hv9ssmzrz/image/fetch/c_fill,f_auto,h_600,q_auto,w_800/https://s3-eu-west-1.amazonaws.com/images-ca-1-0-1-eu/recipe_photos/original/199536/Glace_maison_sans__sorbeti_re_%282%29.jpg" class="d-block w-100" alt="myCarousel4">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="container my-recipe mb-5">
    <div class="col-12">
        <h3 class="top_recipe cols-12" style="text-align: center;">NOS MEILLEURES RECETTES</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
            <?php for ($i = 0; $i < 4; $i++) {
            ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/550x750" class="card-img-top default-img" alt="#">
                        <div class="card-body">
                            <p class="card-text"><?= "Difficultée : " . $recipe[$i]->difficulty . "/5" ?></p> <br>
                            <h5 class="card-title"><?= $recipe[$i]->name ?></h5>
                            <a type="button" href="rec_details/<?= $recipe[$i]->id ?>" class="btn btn-orange"> Voir la recette </a>
                        </div>

                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
</section>
<section class="container my-ingredients mb-5">
    <div class="col-12">
        <h3 class="top_recipe cols-12" style="text-align: center;">NOS TOPS INGREDIENTS</h3>
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
            <?php for ($i = 0; $i < 4; $i++) {
            ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/550x750" class="card-img-top default-img" alt="#">
                        <div class="card-body">
                            <h5 class="card-title"><?= $ing[$i]->products_name ?></h5>
                            <a type="button" href="ing_details/<?= $ing[$i]->Id_php_products ?>" class="btn btn-orange"> Voir l'article </a>
                        </div>

                    </div>
                </div>
            <?php }; ?>
        </div>
    </div>
</section>