<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <?= $this->Html->css('admin') ?>
</head>
<body class="admin-body">

    <!-- Top navbar -->
    <header class="admin-header">
        <h2>Admin Dashboard</h2>
        <?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'logout']) ?>
    </header>

    <!-- Page content -->
    <main class="admin-content">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>

</body>
</html>
