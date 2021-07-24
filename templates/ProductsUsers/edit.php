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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productsUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Products Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="productsUsers form content">
            <?= $this->Form->create($productsUser) ?>
            <fieldset>
                <legend><?= __('Edit Products User') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('product_id', ['options' => $products]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
