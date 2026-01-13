<?php
$this->assign('title', 'Register');
?>

<?= $this->Form->create($user, ['class' => 'register-container']) ?>

<h1>Register</h1>
<p>Create your account to start shopping.</p>

<?= $this->Form->control('username', [
    'placeholder' => 'Username',
    'label' => false,
    'class' => 'register-input username'
]) ?>

<?= $this->Form->control('password', [
    'type' => 'password',
    'placeholder' => 'Password',
    'label' => false,
    'class' => 'register-input password'
]) ?>

<?= $this->Form->control('phone', [
    'type' => 'text',
    'placeholder' => 'Phone Number',
    'label' => false,
    'class' => 'register-input phone',
]) ?>

<?= $this->Form->control('address', [
    'type' => 'textarea',
    'class' => 'register-input address',
    'placeholder' => 'Address',
    'label' => false,
    'rows' => 4,   
]) ?>


<?php if (!empty($redirectAfter)): ?>
<script>
    setTimeout(() => {
        window.location.href = "<?= $this->Url->build(['action' => 'login']) ?>";
    }, 2500);
</script>
<?php endif; ?>

<?= $this->Form->button('Register', ['class' => 'btn-login']) ?>

<div class="links">
        Already have an account? <?= $this->Html->link('Login here', ['action' => 'login']) ?> </p>
</div>

<?= $this->Form->end() ?>