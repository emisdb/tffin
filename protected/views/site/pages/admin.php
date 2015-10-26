<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Администрирование';
$this->breadcrumbs=array(
	'Администрирование',
);
?>
<h1>Меню</h1>

	<div id="admmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Расчетные счета', 'url'=>array('currency/admin')),			
				array('label'=>'Контрагенты', 'url'=>array('client/admin')),			
				array('label'=>'Фирмы', 'url'=>array('department/admin')),			
				array('label'=>'Пользователи', 'url'=>array('users/admin')),			

		))); ?>
	</div><!-- mainmenu -->
