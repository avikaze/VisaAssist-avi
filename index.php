<?php
require_once "classes/Database.php";
require_once "classes/Category.php";

$category = new Category();
$categories = $category->getActiveCategories();
?>

<html>
<head>
    <title>MuMy Project</title>
</head>
<body>

<form method="get" action="form.php">
    <select name="category_id">
        <option>--Select One --</option>
        <?php
            foreach($categories as $category)
            {
                ?>
        <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
        <?php }?>
    </select>
    <button type="submit"> Next </button>
</form>
</body>
</html>
