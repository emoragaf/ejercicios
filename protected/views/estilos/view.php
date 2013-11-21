<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id_estilos)),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_estilos), 'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . $model->label(2), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
'id_estilos',
'valor',
array(
			'name' => 'stylesheets',
			'type' => 'raw',
			'value' => $model->stylesheets !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->stylesheets)), array('stylesheets/view', 'id' => GxActiveRecord::extractPkValue($model->stylesheets, true))) : null,
			),
array(
			'name' => 'tiposEstilos',
			'type' => 'raw',
			'value' => $model->tiposEstilos !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->tiposEstilos)), array('tiposEstilos/view', 'id' => GxActiveRecord::extractPkValue($model->tiposEstilos, true))) : null,
			),
	),
)); ?>

