<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('app_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->app)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('padre')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->padre0)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('nombre')); ?>:
	<?php echo GxHtml::encode($data->nombre); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descripcion')); ?>:
	<?php echo GxHtml::encode($data->descripcion); ?>
	<br />

</div>