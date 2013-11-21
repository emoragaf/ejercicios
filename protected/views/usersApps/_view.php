<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('apps_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->apps)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('users_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->users)); ?>
	<br />

</div>