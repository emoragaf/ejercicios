<?php

$this->breadcrumbs = array(
	UsersApps::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>'Asignar ' . UsersApps::label(), 'url' => array('create','id'=>$userId)),
	array('label'=>Yii::t('app', 'Manage') . ' ' . UsersApps::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(UsersApps::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 