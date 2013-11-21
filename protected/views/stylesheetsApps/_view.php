<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('stylesheets_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->stylesheets)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('apps_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->apps)); ?>
	<br />

</div>