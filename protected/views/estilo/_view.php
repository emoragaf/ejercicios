<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id_estilos')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id_estilos), array('view', 'id' => $data->id_estilos)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('valor')); ?>:
	<?php echo GxHtml::encode($data->valor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('stylesheets_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->stylesheets)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipos_estilos_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->tiposEstilos)); ?>
	<br />

</div>