<?php

/**
 * This is the model base class for the table "apps".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Apps".
 *
 * Columns in table "apps" available as properties of the model,
 * followed by relations of table "apps" available as properties of the model.
 *
 * @property integer $id
 * @property string $nombre
 * @property string $app_name
 * @property string $version
 * @property string $sku
 * @property string $descripcion
 * @property string $keywords
 * @property string $copyright
 * @property string $autor_nombre
 * @property string $autor_url
 * @property string $autor_email
 *
 * @property Categorias[] $categoriases
 * @property StylesheetsApps[] $stylesheetsApps
 * @property UsersApps[] $usersApps
 */
abstract class BaseApps extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'apps';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Aplicación|Aplicaciones', $n);
	}

	public static function representingColumn() {
		return 'nombre';
	}

	public function rules() {
		return array(
			array('nombre, app_name', 'required'),
			array('nombre, sku, descripcion, copyright, autor_nombre, autor_url, autor_email', 'length', 'max'=>100),
			array('app_name, version', 'length', 'max'=>20),
			array('keywords', 'length', 'max'=>255),
			array('version, sku, descripcion, keywords, copyright, autor_nombre, autor_url, autor_email', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, nombre, app_name, version, sku, descripcion, keywords, copyright, autor_nombre, autor_url, autor_email', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'categorias' => array(self::HAS_MANY, 'Categorias', 'app_id'),
			'stylesheetsApps' => array(self::HAS_MANY, 'StylesheetsApps', 'apps_id'),
			'usersApps' => array(self::HAS_MANY, 'UsersApps', 'apps_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
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
			'stylesheetsApps' => null,
			'usersApps' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('nombre', $this->nombre, true);
		$criteria->compare('app_name', $this->app_name, true);
		$criteria->compare('version', $this->version, true);
		$criteria->compare('sku', $this->sku, true);
		$criteria->compare('descripcion', $this->descripcion, true);
		$criteria->compare('keywords', $this->keywords, true);
		$criteria->compare('copyright', $this->copyright, true);
		$criteria->compare('autor_nombre', $this->autor_nombre, true);
		$criteria->compare('autor_url', $this->autor_url, true);
		$criteria->compare('autor_email', $this->autor_email, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}