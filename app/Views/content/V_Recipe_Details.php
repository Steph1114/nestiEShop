<?php
use App\Models\M_Recipes;
$recModel = new M_Recipes();
$url = uri_string();
$id = $url[strlen($url) - 1];
$rec = $recModel->getOneRecipe($id);
$recParagraph = $recModel->getParagraphRecipe($id);
$recIngredient = $recModel->getIngredientRecipe($id);
?>

<div class="container mb-5 mt-5">
    <div class="col-12 ">
        <h1>Recette de : <?= $rec[0]->name ?></h1>
    </div>
    <div class="col-12 d-flex mt-5">
        <div class="col-6"><img src="https://via.placeholder.com/500" alt=""></div>
        <div class="col-6">
            <h2>Nos instructions :</h2>
            <div class="col-12">
                <ul>
                    <?php for ($i = 0; $i < sizeof($recParagraph); $i++) {
                    ?>
                        <li><?= $recParagraph[$i]->paragraph_content ?></li>
                    <?php }; ?>
                </ul>
            </div>
            <h2>Les ingredients nécessaires pour la recette :</h2>
            <div class="col-12">
                <ul>
                    <?php for ($i = 0; $i < sizeof($recIngredient); $i++) {
                    ?>
                        <li><?= $recIngredient[$i]->products_name." ".$recIngredient[$i]->recipe_ingredient_quantity   ." ". $recIngredient[$i]->unit_of_measure_name  ?></li>
                    <?php }; ?>
                </ul>
            </div>
            <h2>Le conseil du chef :</h2>
            <div class="col-12">
                <ul>
                    <?php for ($i = 0; $i < sizeof($recParagraph); $i++) {
                    ?>
                        <li><?= $recParagraph[$i]->paragraph_content ?></li>
                    <?php }; ?>
                </ul>
            </div>
        </div>
    </div>
</div>