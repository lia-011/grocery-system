<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 * @var \Cake\Collection\CollectionInterface|string[] $categories
 */
?>

<?php $this->assign('title', 'Add Product'); ?>

<div class="admin-container">
    <h1>Add New Product</h1>

    <?= $this->Form->create($product, ['type' => 'file']) ?>

        <?= $this->Form->control('category_id', [
            'options' => $categories,
            'empty' => 'Select Category'
        ]) ?>

        <?= $this->Form->control('product_name', [
            'placeholder' => 'Product Name'
        ]) ?>

        <?= $this->Form->control('price', [
            'placeholder' => 'Price'
        ]) ?>

        <?= $this->Form->control('stock_quantity', [
            'placeholder' => 'Stock Quantity'
        ]) ?>

        <?= $this->Form->control('unit', [
            'placeholder' => 'Unit (kg, pcs, box)'
        ]) ?>

        <?= $this->Form->control('description', [
            'type' => 'textarea',
            'placeholder' => 'Product Description'
        ]) ?>

        <?= $this->Form->control('image', [
            'type' => 'file',
            'label' => 'Product Image'
        ]) ?>

        <?= $this->Form->button('Add Product', ['class' => 'btn-add']) ?>

    <?= $this->Form->end() ?>
</div>
