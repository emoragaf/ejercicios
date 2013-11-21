<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'apps-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'app_name'); ?>
		<?php echo $form->textField($model, 'app_name', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'app_name'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model, 'version', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'version'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'sku'); ?>
		<?php echo $form->textField($model, 'sku', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'sku'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model, 'descripcion', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textField($model, 'keywords', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'keywords'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'copyright'); ?>
		<?php echo $form->textField($model, 'copyright', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'copyright'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'autor_nombre'); ?>
		<?php echo $form->textField($model, 'autor_nombre', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'autor_nombre'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'autor_url'); ?>
		<?php echo $form->textField($model, 'autor_url', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'autor_url'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'autor_email'); ?>
		<?php echo $form->textField($model, 'autor_email', array('maxlength' => 100)); ?>
		<?php echo $form->error($model,'autor_email'); ?>
		</div><!-- row -->

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'),array('class'=>'btn btn-success'));
$this->endWidget();
?>
</div><!-- form -->