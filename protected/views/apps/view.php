<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	GxHtml::valueEx($model),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	TbHtml::menuDivider(),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'striped bordered',
	'data' => $model,
	'attributes' => array(
		'nombre',
		'app_name',
		'version',
		'sku',
		'descripcion',
		'keywords',
		'copyright',
		'autor_nombre',
		'autor_url',
		'autor_email',
		),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('categoriases')).' '.GxHtml::link('Nueva Categoria', array('categorias/create','app'=>$model->id), array('class'=>'btn','color' => TbHtml::BUTTON_COLOR_DEFAULT)); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->categoriases as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode($relatedModel->padresLabel().'/ '.GxHtml::valueEx($relatedModel)), array('categorias/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>
<h2><?php echo GxHtml::encode($model->getRelationLabel('stylesheetsApps')).' '.GxHtml::link('Agregar Stylesheet', array('stylesheetsApps/create'), array('class'=>'btn','color' => TbHtml::BUTTON_COLOR_DEFAULT)); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->stylesheetsApps as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('stylesheetsApps/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>