<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsUser[]|\Cake\Collection\CollectionInterface $productsUsers
 */
?>
<div class="productsUsers index content">
    <?= $this->Html->link(__('New Products User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Products Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productsUsers as $productsUser): ?>
                <tr>
                    <td><?= $this->Number->format($productsUser->id) ?></td>
                    <td><?= $productsUser->has('user') ? $this->Html->link($productsUser->user->id, ['controller' => 'Users', 'action' => 'view', $productsUser->user->id]) : '' ?></td>
                    <td><?= $productsUser->has('product') ? $this->Html->link($productsUser->product->name, ['controller' => 'Products', 'action' => 'view', $productsUser->product->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $productsUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsUser->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
