<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsUser $productsUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Products User'), ['action' => 'edit', $productsUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Products User'), ['action' => 'delete', $productsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Products User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsUsers view content">
            <h3><?= h($productsUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $productsUser->has('user') ? $this->Html->link($productsUser->user->id, ['controller' => 'Users', 'action' => 'view', $productsUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $productsUser->has('product') ? $this->Html->link($productsUser->product->name, ['controller' => 'Products', 'action' => 'view', $productsUser->product->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($productsUser->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
