<?php

$this->breadcrumbs = array(
	Apps::label(2),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Apps::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Apps::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Apps::label(2)); ?></h1>

<?php $this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 