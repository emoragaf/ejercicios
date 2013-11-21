<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'estilos-lineas-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'stylesheets_id'); ?>
		<?php echo $form->dropDownList($model, 'stylesheets_id', GxHtml::listDataEx(Stylesheets::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'stylesheets_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lineas_id_linea'); ?>
		<?php echo $form->dropDownList($model, 'lineas_id_linea', GxHtml::listDataEx(Lineas::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'lineas_id_linea'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->