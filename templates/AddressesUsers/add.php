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
            <?= $this->Html->link(__('List Addresses Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="addressesUsers form content">
            <?= $this->Form->create($addressesUser) ?>
            <fieldset>
                <legend><?= __('Add Addresses User') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('address_id', ['options' => $addresses]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
