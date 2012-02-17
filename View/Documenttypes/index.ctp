<div class="documenttypes index">
	<h2><?php echo __('Documenttypes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('codice');?></th>
			<th><?php echo $this->Paginator->sort('desc_it');?></th>
			<th><?php echo $this->Paginator->sort('desc_en');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($documenttypes as $documenttype): ?>
	<tr>
		<td><?php echo h($documenttype['Documenttype']['codice']); ?>&nbsp;</td>
		<td><?php echo h($documenttype['Documenttype']['desc_it']); ?>&nbsp;</td>
		<td><?php echo h($documenttype['Documenttype']['desc_en']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $documenttype['Documenttype']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $documenttype['Documenttype']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $documenttype['Documenttype']['id']), null, __('Are you sure you want to delete # %s?', $documenttype['Documenttype']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Documenttype'), array('action' => 'add')); ?></li>
	</ul>
</div>
