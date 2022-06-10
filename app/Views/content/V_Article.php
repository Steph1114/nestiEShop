<?php

use App\Models\M_Article;

$ingModel = new M_Article();
$ing = $ingModel->getAllIngredients();

?>
<div class="container">
  <div class="col-12">
    <div class="col-12">
      <div class="filter_search" class=" row-cols-md-3 g-3">
        <form action="" method="POST" class="col d-flex">
          <label class="col">Choisir ingredient :</label>
          <select class="col" name="ingredientsType">
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
    <?php for ($i = 0; $i < sizeof($ing); $i++) {
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
</div>