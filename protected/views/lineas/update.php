<?php

$this->breadcrumbs = array(
	GxHtml::valueEx($model->articulo) => array('articulos/view', 'id' => GxActiveRecord::extractPkValue($model->articulo, true)),
	$model->label(2),
);

$this->menu = array(
	array('label' => 'Cancelar', 'url'=>array('articulos/view', 'id' => GxActiveRecord::extractPkValue($model->articulo, true))),
);
?>

<h1><?php echo Yii::t('app', 'Update') . ' ' . GxHtml::encode($model->label()); ?></h1>

<?php
$this->renderPartial('_form', array(
		'model' => $model));
?>