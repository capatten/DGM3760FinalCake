<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- 
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movies index large-9 medium-8 columns content">
    <h3><?= __('Movies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rating') ?></th>
                <th scope="col"><?= $this->Paginator->sort('run_hr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('run_min') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $movie): ?>
            <tr>
                <td><?= h($movie->name) ?></td>
                <td><?= h($movie->rating) ?></td>
                <td><?= $this->Number->format($movie->run_hr) ?></td>
                <td><?= $this->Number->format($movie->run_min) ?></td>
                <td><?= h($movie->year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movie->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movie->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div> -->
<table>
	<tr>
		<th>Name</th>
	<tr>
	<?php foreach ($movies as $movie): ?>
		</tr>
			<td>
				<?php echo $this->Html->image($movie->id.'.jpg', array('alt' => $movie->name, 'class' =>'poster-sm')); ?>
			</td>
			<td><?= h($movie->name) ?></td>
		</tr>
	<?php endforeach; ?>
</table>