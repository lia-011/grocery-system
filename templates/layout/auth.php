<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title><?= $this->fetch('title') ?></title>

    <?= $this->Html->css(['style', 'auth']) ?>
    <?= $this->Html->script('auth') ?>
    <?= $this->fetch('css') ?>
</head>
<body class="auth-page">

    <div class="flash-overlay">
    <?= $this->Flash->render() ?>
    </div>
    <main class="auth-container">
        <?= $this->fetch('content') ?>
    </main>

</body>
</html>