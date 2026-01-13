<?php
$siteTitle = 'Grocery Market System';
$user = $this->request->getAttribute('identity');
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?= $this->Html->charset() ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $siteTitle ?> - <?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>

    <!-- Main site CSS -->
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake', 'style', 'shop']) ?>
    <?= $this->fetch('meta') ?>
    
    <!-- Optional: add JS for search toggle or slider -->
    <?= $this->Html->script(['shop', 'navbar']) ?>
</head>
<body>
    <!-- Navbar -->
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>">
                <?= $this->Html->image('logo.png', ['alt' => 'Grocery Market', 'class' => 'logo-img']) ?>
            </a>
        </div>
        <div class="nav-right">
            <?= $this->Html->link('Home', '/') ?>
            <?= $this->Html->link('Shop', ['controller' => 'Shop', 'action' => 'index']) ?>
            <?= $this->Html->link('About Us', '/pages/about') ?>
            <?= $this->Html->link('Contact', '/pages/contact') ?>

            <!-- Replace Register with search icon for buyers -->
            <button id="nav-search-toggle" class="nav-search-icon">🔍</button>
        </div>
    </nav>

    <!-- Hidden search panel -->
    <div id="nav-search-panel" class="nav-search-panel hidden">
        <?= $this->Form->create(null, [
            'type' => 'get',
            'url' => ['controller' => 'Shop', 'action' => 'index']
        ]) ?>
        <input type="text" name="q" placeholder="Search products..." />

        <div class="filter-row">
            <input type="number" name="min_price" placeholder="Min price" />
            <input type="number" name="max_price" placeholder="Max price" />
        </div>

        <button type="submit">Search</button>
        <?= $this->Form->end() ?>
    </div>

    <!-- Main content (shop page) -->
    <main class="main">
        <?= $this->fetch('content') ?>
    </main>

    <!-- Footer -->
    <footer class="main-footer">
        <p>© 2025 Grocery Market System. All rights reserved.</p>
    </footer>
