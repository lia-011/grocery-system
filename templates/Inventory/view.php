<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventory $inventory
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Inventory'), ['action' => 'edit', $inventory->inventory_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inventory'), ['action' => 'delete', $inventory->inventory_id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventory->inventory_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inventory'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inventory'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="inventory view content">
            <h3><?= h($inventory->inventory_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Inventory Id') ?></th>
                    <td><?= $this->Number->format($inventory->inventory_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Id') ?></th>
                    <td><?= $this->Number->format($inventory->product_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Supplier Id') ?></th>
                    <td><?= $this->Number->format($inventory->supplier_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity Added') ?></th>
                    <td><?= $this->Number->format($inventory->quantity_added) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Added') ?></th>
                    <td><?= h($inventory->date_added) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>