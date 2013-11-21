
<div class="view">
	<?php echo GxHtml::encode($data->getAttributeLabel('nombre')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->nombre), array('view', 'id' => $data->id)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('app_name')); ?>:
	<?php echo GxHtml::encode($data->app_name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('version')); ?>:
	<?php echo GxHtml::encode($data->version); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('sku')); ?>:
	<?php echo GxHtml::encode($data->sku); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('descripcion')); ?>:
	<?php echo GxHtml::encode($data->descripcion); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('keywords')); ?>:
	<?php echo GxHtml::encode($data->keywords); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('copyright')); ?>:
	<?php echo GxHtml::encode($data->copyright); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('autor_nombre')); ?>:
	<?php echo GxHtml::encode($data->autor_nombre); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('autor_url')); ?>:
	<?php echo GxHtml::encode($data->autor_url); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('autor_email')); ?>:
	<?php echo GxHtml::encode($data->autor_email); ?>
	<br />
	*/ ?>

</div>