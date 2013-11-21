<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('articulos_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->articulos)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('texto')); ?>:
	<?php echo GxHtml::encode($data->texto); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('latex')); ?>:
	<?php echo GxHtml::encode($data->latex); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('imagen')); ?>:
	<?php echo GxHtml::encode($data->imagen); ?>
	<br />

</div>