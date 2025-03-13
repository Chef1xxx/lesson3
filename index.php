<?php require_once("utils/functions.php") ?>
<?php require_once("templates/header.php") ?>

<div class="container">
  <div class="info">
    Книга рецептов - это кулинарный сайт, который поможет вам выбрать блюдо или понять как можно сделать его ещё
    вкуснее. Так же вы можете оставлять свои рецепты для других пользователей. Удачи ;)
  </div>
</div>
<div class="cards">
  <div class="row">
    <?php print_recipes($recipes) ?>;
  </div>
</div>
<?php require_once("templates/footer.php") ?>
