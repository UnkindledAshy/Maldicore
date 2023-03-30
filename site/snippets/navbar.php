<?php snippet('html') ?>
<body>
    <?= css('/assets/css/templates/navbar.css') ?>
    <header class="header">
        <nav class="navbar">
            <div class="left">
            <ul>
                <img src="/assets/css/Pictures/1660081634logo-alt.jpeg">
            </ul>
            </div>
            <div class="right">
             <ul>
                <?php foreach ($site->children()->listed() as $item):?>
                <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
                <?php endforeach ?>    
            </ul>
            </div>
        </nav>
</body>
</html>