<div class="admin-dashboard">

    <h1>Admin Dashboard</h1>
    <p class="subtitle">Welcome back, Admin 👑</p>

    <div class="stats">
        <div class="card">
            <h3>Total Users</h3>
            <p><?= $totalUsers ?></p>
        </div>

        <div class="card">
            <h3>Total Products</h3>
            <p><?= $totalProducts ?></p>
        </div>

        <div class="card">
            <h3>Total Orders</h3>
            <p><?= $totalOrders ?></p>
        </div>
    </div>

    <div class="admin-actions">
        <?= $this->Html->link('Manage Products', ['controller' => 'Products', 'action' => 'index'], ['class' => 'admin-btn']) ?>
        <?= $this->Html->link('Manage Categories', ['controller' => 'Categories', 'action' => 'index'], ['class' => 'admin-btn']) ?>
        <?= $this->Html->link('View Orders', ['controller' => 'Orders', 'action' => 'index'], ['class' => 'admin-btn']) ?>
        <?= $this->Html->link('Manage Users', ['controller' => 'Users', 'action' => 'index'], ['class' => 'admin-btn']) ?>
    </div>

</div>
