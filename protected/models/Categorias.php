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
			'padre0' => 'Padre',
			'categoriases' => 'Subcategorias',
			'app' => null,
		);
	}
	public static function label($n = 1) {
			return Yii::t('app', 'Categoria|Categorias', $n);
		}
	public function padresBreadcrumb(){
		if(!empty($this->padre0))
		{
			return array_merge($this->padre0->padresBreadcrumb(),array(GxHtml::valueEx($this->padre0) => array('categorias/view', 'id' => GxActiveRecord::extractPkValue($this->padre0, true))));
		}
		else
			return array(GxHtml::valueEx($this->app) => array('apps/view', 'id' => GxActiveRecord::extractPkValue($this->app, true)));
	}
	public function padresLabel()
	{
		if(!empty($this->padre0))
		{
			return $this->padre0->padresLabel().'/ '.GxHtml::valueEx($this->padre0);
		}
		else
			return '';
	}
}