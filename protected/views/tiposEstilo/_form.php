<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'tipos-estilos-form',
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
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model, 'descripcion', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('estiloses')); ?></label>
		<?php echo $form->checkBoxList($model, 'estiloses', GxHtml::encodeEx(GxHtml::listDataEx(Estilos::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->