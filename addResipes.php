<?php require_once("utils/functions.php") ?>
<?php require_once("templates/header.php") ?>
<?php
$filename = 'recipes.php';

if (file_exists($filename)) {
    $recipes = include $filename;
} else {
    $recipes = [];
}

function addRecipe(&$recipes, $name, $description, $time, $image) {
    $newRecipe = [
        "name" => $name,
        "description" => $description,
        "time" => $time,
        "image" => $image
    ];
    array_push($recipes, $newRecipe);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $time = $_POST['time'];
    $image = $_POST['image'];
    addRecipe($recipes, $name, $description, $time, $image);
    $fileContent = "<?php\nreturn " . var_export($recipes, true) . ";\n";
    file_put_contents($filename, $fileContent);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>  
    <form method="post">
        <input type="text" id="name" name="name" placeholder="Название"required><br>
        <input id="description" name="description" placeholder="Краткое описание" required></input><br>
        <input type="text" id="time" name="time" placeholder="Время приготовление" required><br>
        <input type="text" id="image" name="image" placeholder="Ссылка на Изображение" required><br>
        <input type="submit" value="Добавить рецепт">
    </form>
<?php require_once("templates/footer.php") ?>