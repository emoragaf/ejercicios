<?php

$this->breadcrumbs = array(
	GxHtml::valueEx($model->categoria) => array('categorias/view','id'=>GxActiveRecord::extractPkValue($model->categoria)),
	GxHtml::valueEx($model),
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
<h1><?php echo Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model)); ?></h1>
<?php $this->widget('bootstrap.widgets.TbAlert'); ?>
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data' => $model,
	'type' =>'striped bordered',
	'attributes' => array(
		array(
			'name' => 'categoria',
			'type' => 'raw',
			'value' => $model->categoria !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->categoria)), array('categorias/view', 'id' => GxActiveRecord::extractPkValue($model->categoria, true))) : null,
		),
		'nombre',
		'descripcion',
	),
)); ?>
<h2><?php echo GxHtml::encode($model->getRelationLabel('lineases')).' '.GxHtml::link('Nueva Linea', array('lineas/create','id'=>$model->id), array('class'=>'btn','color' => TbHtml::BUTTON_COLOR_DEFAULT))
; ?></h2>
<?php

	echo GxHtml::openTag('ul');
	$numLinea = 1;
	foreach($model->lineases as $relatedModel) {
		$contenido='<div clas="row">';
		if(!empty($relatedModel->texto))
		{
			$contenido = $contenido.'<div class="well">'.$relatedModel->texto.'</div>';
		}
		if(!empty($relatedModel->latex))
		{
			$contenido = $contenido.'<div class="well">'.$relatedModel->latex.'</div>';
		}
		if(!empty($relatedModel->imagen))
		{
			$contenido = $contenido.'<div class="well">'.GxHtml::image($relatedModel->imagen).'</div>';
		}
		$contenido=$contenido.'</div>';
		$this->widget('yiiwheels.widgets.box.WhBox', array(
		    'title' => 'Linea '.$numLinea,
		    'headerButtons' => array(
		      GxHtml::link('Editar', array('lineas/update','id'=>$relatedModel->id), array('class'=>'btn btn-primary')),
		      '&nbsp;',
		      '&nbsp;',
		      GxHtml::link('Eliminar',"#", array("class"=>"btn btn-danger","submit"=>array('lineas/delete', 'id'=>$relatedModel->id), 'confirm' => 'Are you sure?')),
		        ),
		    'content' => $contenido,
		));
		$numLinea++;
	}
	echo GxHtml::closeTag('ul');
?>