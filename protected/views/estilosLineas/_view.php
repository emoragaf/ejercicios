<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('stylesheets_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->stylesheets)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lineas_id_linea')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->lineasIdLinea)); ?>
	<br />

</div>