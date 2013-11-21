<?php

/**
 * This is the model base class for the table "estilos_lineas".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "EstilosLineas".
 *
 * Columns in table "estilos_lineas" available as properties of the model,
 * followed by relations of table "estilos_lineas" available as properties of the model.
 *
 * @property integer $id
 * @property integer $stylesheets_id
 * @property integer $lineas_id_linea
 *
 * @property Stylesheets $stylesheets
 * @property Lineas $lineasIdLinea
 */
abstract class BaseEstilosLineas extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'estilos_lineas';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Estilo Linea|Estilos Lineas', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('stylesheets_id, lineas_id_linea', 'required'),
			array('stylesheets_id, lineas_id_linea', 'numerical', 'integerOnly'=>true),
			array('id, stylesheets_id, lineas_id_linea', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'stylesheets' => array(self::BELONGS_TO, 'Stylesheets', 'stylesheets_id'),
			'lineasIdLinea' => array(self::BELONGS_TO, 'Lineas', 'lineas_id_linea'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'stylesheets_id' => null,
			'lineas_id_linea' => null,
			'stylesheets' => null,
			'lineasIdLinea' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('stylesheets_id', $this->stylesheets_id);
		$criteria->compare('lineas_id_linea', $this->lineas_id_linea);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}