<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AddressesUser $addressesUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Addresses User'), ['action' => 'edit', $addressesUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Addresses User'), ['action' => 'delete', $addressesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addressesUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Addresses Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Addresses User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="addressesUsers view content">
            <h3><?= h($addressesUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $addressesUser->has('user') ? $this->Html->link($addressesUser->user->id, ['controller' => 'Users', 'action' => 'view', $addressesUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= $addressesUser->has('address') ? $this->Html->link($addressesUser->address->id, ['controller' => 'Addresses', 'action' => 'view', $addressesUser->address->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($addressesUser->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
