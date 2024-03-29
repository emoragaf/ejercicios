<?php
$this->breadcrumbs = array_merge($model->padresBreadcrumb(),array(GxHtml::valueEx($model),));


$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create','app'=>$model->app_id,'cat'=>$model->id)),
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	TbHtml::menuDivider(),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data' => $model,
	'type'=>'striped bordered',
	'attributes' => array(
array(
			'name' => 'app',
			'type' => 'raw',
			'value' => $model->app !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->app)), array('apps/view', 'id' => GxActiveRecord::extractPkValue($model->app, true))) : null,
			),
array(
			'name' => 'father',
			'type' => 'raw',
			'value' => $model->father !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->father)), array('categorias/view', 'id' => GxActiveRecord::extractPkValue($model->father, true))) : null,
			),
'nombre',
'descripcion',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('articulos')).' '.GxHtml::link('Nuevo Artículo', array('articulos/create','id'=>$model->id), array('class'=>'btn','color' => TbHtml::BUTTON_COLOR_DEFAULT)); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->articulos as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('articulos/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>
<h3><?php echo (!empty($model->categorias) ? GxHtml::encode($model->getRelationLabel('categoriases')):''); ?></h3>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->categorias as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('categorias/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>