<?php

/**
 * This is the model base class for the table "authitem".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Authitem".
 *
 * Columns in table "authitem" available as properties of the model,
 * followed by relations of table "authitem" available as properties of the model.
 *
 * @property string $name
 * @property integer $type
 * @property string $description
 * @property string $bizrule
 * @property string $data
 *
 * @property Authassignment[] $authassignments
 * @property Authitemchild[] $authitemchildren
 * @property Authitemchild[] $authitemchildren1
 * @property Rights $rights
 */
abstract class BaseAuthitem extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'authitem';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Authitem|Authitems', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name, type', 'required'),
			array('type', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>64),
			array('description, bizrule, data', 'safe'),
			array('description, bizrule, data', 'default', 'setOnEmpty' => true, 'value' => null),
			array('name, type, description, bizrule, data', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'authassignments' => array(self::HAS_MANY, 'Authassignment', 'itemname'),
			'authitemchildren' => array(self::HAS_MANY, 'Authitemchild', 'parent'),
			'authitemchildren1' => array(self::HAS_MANY, 'Authitemchild', 'child'),
			'rights' => array(self::HAS_ONE, 'Rights', 'itemname'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'name' => Yii::t('app', 'Name'),
			'type' => Yii::t('app', 'Type'),
			'description' => Yii::t('app', 'Description'),
			'bizrule' => Yii::t('app', 'Bizrule'),
			'data' => Yii::t('app', 'Data'),
			'authassignments' => null,
			'authitemchildren' => null,
			'authitemchildren1' => null,
			'rights' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('name', $this->name, true);
		$criteria->compare('type', $this->type);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('bizrule', $this->bizrule, true);
		$criteria->compare('data', $this->data, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}