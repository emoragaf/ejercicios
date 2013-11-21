<?php

Yii::import('application.models._base.BaseApps');

class Apps extends BaseApps
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'nombre' => Yii::t('app', 'Nombre'),
			'app_name' => Yii::t('app', 'App Name'),
			'version' => Yii::t('app', 'Version'),
			'sku' => Yii::t('app', 'Sku'),
			'descripcion' => Yii::t('app', 'Descripcion'),
			'keywords' => Yii::t('app', 'Keywords'),
			'copyright' => Yii::t('app', 'Copyright'),
			'autor_nombre' => Yii::t('app', 'Autor Nombre'),
			'autor_url' => Yii::t('app', 'Autor Url'),
			'autor_email' => Yii::t('app', 'Autor Email'),
			'categoriases' => null,
			'stylesheetsApps' => 'Stylesheets',
			'usersApps' => 'Usuarios',
			
		);
	}
}