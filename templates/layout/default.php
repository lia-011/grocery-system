<?php
$siteTitle = 'Grocery Market System';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?= $this->Html->charset() ?>
    <?php
    $user = $this->request->getAttribute('identity');
    ?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $siteTitle ?> - <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'style']) ?>
    <?= $this->fetch('meta') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>">
             <?= $this->Html->image('logo.png', ['alt' => 'Grocery Market', 'class' => 'logo-img']) ?>
            </a>
        </div>
        <div class="nav-right">
        <?= $this->Html->link('Home', '/') ?>
        <?= $this->Html->link('About Us', '/pages/about') ?>
        <?= $this->Html->link('Contact', '/pages/contact') ?>
        <?= $this->Html->css('admin') ?>
        <?= $this->Html->link('Register', ['controller' => 'Users', 'action' => 'Register'], ['class' => 'nav-link']) ?>
        </div>
         </nav>

    <main class="main">
            <?= $this->fetch('content') ?>
    </main>

    <footer style="text-align:center; padding:20px; background:#f1f1f1; margin-top:50px;">
        <p>© 2025 Grocery Market System. All rights reserved.</p>
    </footer>
</body>
</html>

