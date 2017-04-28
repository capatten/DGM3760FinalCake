<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movie'), ['action' => 'edit', $movie->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movie'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movies view large-9 medium-8 columns content">
    <h3><?= h($movie->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rating') ?></th>
            <td><?= h($movie->rating) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($movie->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movie->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Run Hr') ?></th>
            <td><?= $this->Number->format($movie->run_hr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Run Min') ?></th>
            <td><?= $this->Number->format($movie->run_min) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Details') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->details)); ?>
    </div>
</div>
