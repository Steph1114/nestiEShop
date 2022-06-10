<?php
use App\Models\M_Recipes;

  $recModel = new M_Recipes();
        $recipe = $recModel->getAllrecipes();
        
?>
<div class="container">
    <div class="col-12">
        <div class="col-12">

            <div class="filter_search" class=" row-cols-md-3 g-3">
                <form action="" method="POST" class="col d-flex">
                    <label class="col">Add Filter :</label>
                    <select class="col" name="recipeType">
                        <option value=""></option>
                        <option value="fruit">Pomme</option>
                        <option value="vegetable">Asperges</option>
                        <option value="red-fruit">Tomates</option>
                        <option value="green-vegetable">Haricots verts</option>
                    </select>

            </div>

            <div class="col-12">
                <div class="d-flex">
                    <input class="col" yype="text" name="ingredient_name" />
                    <input class="col" type="submit" name="search" value="Search" />
                </div>
                </form>
            </div>

        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
        <?php for ($i=0; $i  < sizeof($recipe) ; $i++)  { 
                # code...
             ?>
      
            <div class="col mb-5">
                <div class="card h-100">
                    <img src="https://via.placeholder.com/550x750" class="card-img-top default-img" alt="#">
                    <div class="card-body">
                    <p class="card-text"><?="Difficultée : ".$recipe[$i]->difficulty."/5"?></p> <br>
                        <h5 class="card-title"><?=  $recipe[$i]->name?></h5>
                        <a type="button" href="rec_details/<?= $recipe[$i]->id ?>" class="btn btn-orange"> Voir la recette </a>
                    </div>
                </div>
            </div>
            <?php }; ?>
        </div>
    </div>
<div class="space"></div>

</div>