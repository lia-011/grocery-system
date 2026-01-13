<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderItem $orderItem
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order Item'), ['action' => 'edit', $orderItem->order_item_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order Item'), ['action' => 'delete', $orderItem->order_item_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItem->order_item_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Order Item'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order Item'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="orderItem view content">
            <h3><?= h($orderItem->order_item_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $orderItem->hasValue('order') ? $this->Html->link($orderItem->order->payment_method, ['controller' => 'Orders', 'action' => 'view', $orderItem->order->order_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Item Id') ?></th>
                    <td><?= $this->Number->format($orderItem->order_item_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Product Id') ?></th>
                    <td><?= $this->Number->format($orderItem->product_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($orderItem->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subtotal') ?></th>
                    <td><?= $this->Number->format($orderItem->subtotal) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>