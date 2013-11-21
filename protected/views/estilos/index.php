<?php

$this->breadcrumbs = array(
	Estilos::label(2),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Estilos::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Estilos::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Estilos::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 