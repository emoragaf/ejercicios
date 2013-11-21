<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'stylesheets-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model, 'nombre', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('estiloses')); ?></label>
		<?php echo $form->checkBoxList($model, 'estiloses', GxHtml::encodeEx(GxHtml::listDataEx(Estilos::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('estilosLineases')); ?></label>
		<?php echo $form->checkBoxList($model, 'estilosLineases', GxHtml::encodeEx(GxHtml::listDataEx(EstilosLineas::model()->findAllAttributes(null, true)), false, true)); ?>
		<label><?php echo GxHtml::encode($model->getRelationLabel('stylesheetsApps')); ?></label>
		<?php echo $form->checkBoxList($model, 'stylesheetsApps', GxHtml::encodeEx(GxHtml::listDataEx(StylesheetsApps::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->