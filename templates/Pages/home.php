<?= $this->Html->css('style') ?>
<?= $this->Html->script('script') ?>

<?php
$this->assign('title', 'Welcome');
?>

<section class="hero-split">
    <div class="hero-left">
        <h1>WELCOME TO Farmé</h1>
        <p>
             Discover fresh products, great deals, and an easy shopping experience —
                all in one place.
        </p>

        <a href="<?= $this->Url->build('/users/login') ?>" class="btn-login">Shop Now</a>
    </div>

    <div class="hero-right">
        <img src="<?= $this->Url->image('grocery.png') ?>" alt="Grocery Market">
    </div>
</section>
