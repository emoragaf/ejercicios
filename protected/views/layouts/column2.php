<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">		
	<div class="span9">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span3">
		<div class="well">
			<?php
				// $this->beginWidget('zii.widgets.CPortlet', array(
				// 	'title'=>'Operations',
				// ));

				// $this->widget('zii.widgets.CMenu', array(
				// 	'items'=>$this->menu,
				// 	'htmlOptions'=>array('class'=>'operations'),
				// ));

				// $this->endWidget();
				$this->widget('bootstrap.widgets.TbNav', array(
				    'type' => TbHtml::NAV_TYPE_LIST,
				    'items' => array_merge(array( array('label' => 'Operaciones')),$this->menu),
				));
			?>
		</div>
		<!-- sidebar -->
	</div>
</div>
	
<?php $this->endContent(); ?>