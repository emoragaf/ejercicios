<?php

$this->breadcrumbs = array(
	GxHtml::valueEx($model->articulos) => array('articulos/view', 'id' => GxActiveRecord::extractPkValue($model->articulos, true)),
	$model->label(2),
);
$this->menu=array(
	array('label'=>Yii::t('app', 'Update') . ' ' . $model->label(), 'url'=>array('update', 'id' => $model->id)),
	TbHtml::menuDivider(),
	array('label'=>Yii::t('app', 'Delete') . ' ' . $model->label(), 'url'=>'#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<?php 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/mathjax/MathJax.js?config=TeX-AMS-MML_HTMLorMML');
 ?>
<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()); ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'type'=>'striped bordered',
	'data' => $model,
	'attributes' => array(
		array(
			'name' => 'articulos',
			'type' => 'raw',
			'value' => $model->articulos !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->articulos)), array('articulos/view', 'id' => GxActiveRecord::extractPkValue($model->articulos, true))) : null,
		),
		array(               // related city displayed as a link
            'label'=>'texto',
            'type'=>'raw',
            'value'=>$model->texto,
        ),
		'latex',
		'imagen',
	),
)); ?>

<h2><?php echo GxHtml::encode($model->getRelationLabel('estilosLineases')); ?></h2>
<?php
	echo GxHtml::openTag('ul');
	foreach($model->estilosLineases as $relatedModel) {
		echo GxHtml::openTag('li');
		echo GxHtml::link(GxHtml::encode(GxHtml::valueEx($relatedModel)), array('estilosLineas/view', 'id' => GxActiveRecord::extractPkValue($relatedModel, true)));
		echo GxHtml::closeTag('li');
	}
	echo GxHtml::closeTag('ul');
?>