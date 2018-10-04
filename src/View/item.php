<!DOCTYPE html>

<html>

<head> MVC 1 & 2 </head>
<body>
<section>
    <h1>Items</h1>
    <ul>
        <?php foreach ($items as $items) : ?>
            <li><?= $items['title'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>

</html>