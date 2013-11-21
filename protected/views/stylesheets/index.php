<?php

$this->breadcrumbs = array(
	Stylesheets::label(2),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Stylesheets::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Stylesheets::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Stylesheets::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 