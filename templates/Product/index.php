<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Product> $product
 */
?>
<div class="products index content">
    <h1>Products</h1>
    <?= $this->Html->link('Add New Product', ['action' => 'add'], ['class' => 'button btn-add']) ?>

    <table class="table-products">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('product_id', 'ID') ?></th>
                <th><?= $this->Paginator->sort('category', 'Category') ?></th>
                <th><?= $this->Paginator->sort('product_name', 'Product Name') ?></th>
                <th><?= $this->Paginator->sort('price', 'Price') ?></th>
                <th><?= $this->Paginator->sort('stock_quantity', 'Stock') ?></th>
                <th><?= $this->Paginator->sort('unit', 'Unit') ?></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= h($product->product_id) ?></td>
                <td><?= h($product->category) ?></td>
                <td><?= h($product->product_name) ?></td>
                <td>$<?= h($product->price) ?></td>
                <td><?= h($product->stock_quantity) ?></td>
                <td><?= h($product->unit) ?></td>
                <img
                        src="/img/products/<?= h($product->image ?? 'placeholder.png') ?>"
                        style="width:60px;height:60px;object-fit:cover;border-radius:6px;"
                    >
                <td class="actions">
                    <?= $this->Html->link('View', ['action' => 'view', $product->product_id], ['class' => 'btn-view']) ?>
                    <?= $this->Html->link('Edit', ['action' => 'edit', $product->product_id], ['class' => 'btn-edit']) ?>
                    <?= $this->Form->postLink('Delete', ['action' => 'delete', $product->product_id], [
                        'confirm' => 'Are you sure you want to delete #' . $product->product_id . '?',
                        'class' => 'btn-delete'
                    ]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="paginator">
        <?= $this->Paginator->prev('« Previous') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('Next »') ?>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} products out of {{count}} total')) ?></p>
    </div>
</div>
