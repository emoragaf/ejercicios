<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<?php Yii::app()->bootstrap->register(); ?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
		    'display' => null, // default is static to top
		    'items' => array(
		        array(
		            'class' => 'bootstrap.widgets.TbNav',
           			'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'Apps', 'url'=>array('/apps/index'), 'visible'=>!Yii::app()->user->isGuest),
						array(
							'label'=>'Administación de Estilos',
				            'class'=>'bootstrap.widgets.TbDropdown',
				            'items'=>array(
				                array('label'=>'Estilos', 'url'=>array('/estilos/index')),
				                array('label'=>'Stylesheets', 'url'=>array('/stylesheets/index')),
				            ), 'visible'=>!Yii::app()->user->isGuest
				        ),
				        array(
							'label'=>'Administación',
				            'class'=>'bootstrap.widgets.TbDropdown',
				            'items'=>array(
				                array('label'=>'Rights', 'url'=>array('/rights'), ),
				                array('label'=>'Administración Usuarios', 'url'=>array('/user/admin'), ),
				            ), 'visible'=>Yii::app()->user->checkAccess('Administrator'),
				        ),
						array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
		        ),
		    ),
		)); ?>
<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
		    'links' => $this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>	

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> por Exefire.<br/>
		Derechos Reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
