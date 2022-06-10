
<?php 
use App\Models\M_Article;
$ingModel = new M_Article();

$url = uri_string();
$id = $url[strlen($url) - 1];
$ing = $ingModel->getOneIngredients($id);

?>
<div class="container">
    <div class="col-12">
        <h1>Détail de : <?= $ing[0]->products_name ?></h1>
    </div>
</div>