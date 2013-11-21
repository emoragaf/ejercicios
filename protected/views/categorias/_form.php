<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'categorias-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'app_id'); ?>
		<?php echo $form->dropDownList($model, 'app_id', GxHtml::listDataEx(Apps::model()->findAllAttributes(null, true)),array('disabled'=>true)); ?>
		<?php echo $form->error($model,'app_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'padre'); ?>
		<?php echo $form->dropDownList($model, 'padre', GxHtml::listDataEx(Categorias::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'padre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model, 'descripcion'); ?>
		<?php echo $form->error($model,'descripcion'); ?>
		</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'),array('class'=>'btn btn-success'));
$this->endWidget();
?>
</div><!-- form -->