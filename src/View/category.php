<!DOCTYPE html>

<html>

<head> MVC 3</head>
<body>
<section>
    <h1>Categories</h1>
    <ul>
        <?php foreach ($category as $category) : ?>
            <li><?= $category['name'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>

</html>