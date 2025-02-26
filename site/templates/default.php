<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css("assets/css/default.css") ?>
</head>
<body>
</html>

    <h1><?= $page->title() ?></h1>
    
    <div>
    <?php foreach($page->images() as $image): ?>
    <figure>
        <a href="<?= $image->url() ?>">
            <img src="<?= $image->url() ?>" alt="">
        </a>
    </figure>
        <?php endforeach ?>
    </div>

    <p><?= $page->intro() ?></p>
    
</body>
