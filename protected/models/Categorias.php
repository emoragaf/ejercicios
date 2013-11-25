<?php

Yii::import('application.models._base.BaseCategorias');

class Categorias extends BaseCategorias
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}		
	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'app_id' => null,
			'padre' => 'Padre',
			'nombre' => Yii::t('app', 'Nombre'),
			'descripcion' => Yii::t('app', 'Descripcion'),
			'articuloses' => 'Articulos',
			'father' => 'Padre',
			'categoriases' => 'Subcategorias',
			'app' => null,
		);
	}
	public static function label($n = 1) {
			return Yii::t('app', 'Categoria|Categorias', $n);
		}
	public function padresBreadcrumb(){
		if(!empty($this->father))
		{
			return array_merge($this->father->padresBreadcrumb(),array(GxHtml::valueEx($this->father) => array('categorias/view', 'id' => GxActiveRecord::extractPkValue($this->father, true))));
		}
		else
			return array(GxHtml::valueEx($this->app) => array('apps/view', 'id' => GxActiveRecord::extractPkValue($this->app, true)));
	}
	public function padresLabel()
	{
		if(!empty($this->father))
		{
			return $this->father->padresLabel().'/ '.GxHtml::valueEx($this->father);
		}
		else
			return '';
	}
}