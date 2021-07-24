<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AddressesUser[]|\Cake\Collection\CollectionInterface $addressesUsers
 */
?>
<div class="addressesUsers index content">
    <?= $this->Html->link(__('New Addresses User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Addresses Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('address_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($addressesUsers as $addressesUser): ?>
                <tr>
                    <td><?= $this->Number->format($addressesUser->id) ?></td>
                    <td><?= $addressesUser->has('user') ? $this->Html->link($addressesUser->user->id, ['controller' => 'Users', 'action' => 'view', $addressesUser->user->id]) : '' ?></td>
                    <td><?= $addressesUser->has('address') ? $this->Html->link($addressesUser->address->id, ['controller' => 'Addresses', 'action' => 'view', $addressesUser->address->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $addressesUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addressesUser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addressesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addressesUser->id)]) ?>
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
