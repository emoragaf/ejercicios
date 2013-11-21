<?php

/**
 * This is the model base class for the table "adjuntos_lineas".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "AdjuntosLineas".
 *
 * Columns in table "adjuntos_lineas" available as properties of the model,
 * followed by relations of table "adjuntos_lineas" available as properties of the model.
 *
 * @property integer $id
 * @property integer $id_adjunto
 * @property integer $id_linea
 *
 * @property Adjuntos $idAdjunto
 * @property Lineas $idLinea
 */
abstract class BaseAdjuntosLineas extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'adjuntos_lineas';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'AdjuntosLineas|AdjuntosLineases', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('id_adjunto, id_linea', 'required'),
			array('id_adjunto, id_linea', 'numerical', 'integerOnly'=>true),
			array('id, id_adjunto, id_linea', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idAdjunto' => array(self::BELONGS_TO, 'Adjuntos', 'id_adjunto'),
			'idLinea' => array(self::BELONGS_TO, 'Lineas', 'id_linea'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'id_adjunto' => null,
			'id_linea' => null,
			'idAdjunto' => null,
			'idLinea' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('id_adjunto', $this->id_adjunto);
		$criteria->compare('id_linea', $this->id_linea);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}