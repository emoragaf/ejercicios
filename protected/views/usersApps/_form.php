<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'users-apps-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'apps_id'); ?>
		<?php echo $form->dropDownList($model, 'apps_id', GxHtml::listDataEx(Apps::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'apps_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'users_id'); ?>
		<?php echo $form->dropDownList($model, 'users_id', GxHtml::listDataEx(Users::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'users_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->