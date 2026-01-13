<?php
$this->assign('title', 'Login');
?>

<div class="login-container">
    <h1>Login</h1>
    <p>Welcome back! Please login to start shopping.</p>

    <?= $this->Form->create() ?>
    <?= $this->Form->control('username', [
        'label' => false,                  
        'placeholder' => 'Username',         
        'class' => 'login-input username'     
    ]) ?>
    <?= $this->Form->control('password', [
        'type' => 'password',
        'label' => false,
        'placeholder' => 'Password',
        'class' => 'login-input password'
    ]) ?>
    <?= $this->Form->button('Login', ['class' => 'btn-login']) ?>
    <?= $this->Form->end() ?>

    <div class="links">
        <p>Don't have an account? <?= $this->Html->link('Register', ['action' => 'register']) ?></p>
    </div>
</div>
