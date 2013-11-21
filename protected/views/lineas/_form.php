<div class="form">

<?php 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/mathjax/MathJax.js?config=TeX-AMS-MML_HTMLorMML');
 ?>
<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'lineas-form',
	'enableAjaxValidation' => false,
	 'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'articulos_id'); ?>
		<?php echo $form->dropDownList($model, 'articulos_id', GxHtml::listDataEx(Articulos::model()->findAllAttributes(null, true)),array('disabled'=>true)); ?>
		<?php echo $form->error($model,'articulos_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php $this->widget('yiiwheels.widgets.redactor.WhRedactor', array(
			    'model'=>$model,
			    'attribute'=>'texto',
		));?>
		<?php echo $form->error($model,'texto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'latex'); ?>
		<?php echo $form->textField($model, 'latex', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'latex'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'imagen'); ?>
		<?php echo $form->textField($model, 'imagen', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'imagen'); ?>
		</div><!-- row -->
		<?php  
		echo $form->fileField(Adjuntos::model(), 'filename');
		echo $form->error(Adjuntos::model(), 'filename');
		echo'<div class="row buttons">';
		echo CHtml::submitButton(Adjuntos::model()->isNewRecord ? 'Adjuntar' : 'Adjuntar');
		echo'</div>';
		?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'),array('class'=>'btn btn-success'));
$this->endWidget();
?>
</div><!-- form -->