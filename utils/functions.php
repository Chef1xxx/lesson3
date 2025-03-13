<?php
$filename = 'recipes.php';

// Загрузка существующих рецептов из файла
if (file_exists($filename)) {
  $recipes = include $filename;
} else {
  $recipes = [];
}
function print_recipes(array $recipes)
{
  foreach ($recipes as $recipe) {
    echo '<div class="col-3">
        <div class="card">
        <div class="card-images">
        <img src="' . $recipe["image"] . '" alt="">  
      </div>
        <div class="card-text">
          <h2>' . $recipe["name"] .
      '</h2>
          <p>' . $recipe['description'] . '
          </p>
          <p class="time">
            Время приготовления: ' . $recipe["time"] . ' минут.
          </p>
          <a href="#" type="button" class="btn btn-success">
            Читать подробнее 
          </a>
        </div>
      </div>
      </div>';
  }
}
?>