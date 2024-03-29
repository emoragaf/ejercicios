<?php

/**
 * This is the model base class for the table "profiles_fields".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ProfilesFields".
 *
 * Columns in table "profiles_fields" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $varname
 * @property string $title
 * @property string $field_type
 * @property string $field_size
 * @property string $field_size_min
 * @property integer $required
 * @property string $match
 * @property string $range
 * @property string $error_message
 * @property string $other_validator
 * @property string $default
 * @property string $widget
 * @property string $widgetparams
 * @property integer $position
 * @property integer $visible
 *
 */
abstract class BaseProfilesFields extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'profiles_fields';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ProfilesFields|ProfilesFields', $n);
	}

	public static function representingColumn() {
		return 'varname';
	}

	public function rules() {
		return array(
			array('varname, title, field_type', 'required'),
			array('required, position, visible', 'numerical', 'integerOnly'=>true),
			array('varname, field_type', 'length', 'max'=>50),
			array('title, match, range, error_message, default, widget', 'length', 'max'=>255),
			array('field_size, field_size_min', 'length', 'max'=>15),
			array('other_validator, widgetparams', 'length', 'max'=>5000),
			array('field_size, field_size_min, required, match, range, error_message, other_validator, default, widget, widgetparams, position, visible', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, varname, title, field_type, field_size, field_size_min, required, match, range, error_message, other_validator, default, widget, widgetparams, position, visible', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'varname' => Yii::t('app', 'Varname'),
			'title' => Yii::t('app', 'Title'),
			'field_type' => Yii::t('app', 'Field Type'),
			'field_size' => Yii::t('app', 'Field Size'),
			'field_size_min' => Yii::t('app', 'Field Size Min'),
			'required' => Yii::t('app', 'Required'),
			'match' => Yii::t('app', 'Match'),
			'range' => Yii::t('app', 'Range'),
			'error_message' => Yii::t('app', 'Error Message'),
			'other_validator' => Yii::t('app', 'Other Validator'),
			'default' => Yii::t('app', 'Default'),
			'widget' => Yii::t('app', 'Widget'),
			'widgetparams' => Yii::t('app', 'Widgetparams'),
			'position' => Yii::t('app', 'Position'),
			'visible' => Yii::t('app', 'Visible'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('varname', $this->varname, true);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('field_type', $this->field_type, true);
		$criteria->compare('field_size', $this->field_size, true);
		$criteria->compare('field_size_min', $this->field_size_min, true);
		$criteria->compare('required', $this->required);
		$criteria->compare('match', $this->match, true);
		$criteria->compare('range', $this->range, true);
		$criteria->compare('error_message', $this->error_message, true);
		$criteria->compare('other_validator', $this->other_validator, true);
		$criteria->compare('default', $this->default, true);
		$criteria->compare('widget', $this->widget, true);
		$criteria->compare('widgetparams', $this->widgetparams, true);
		$criteria->compare('position', $this->position);
		$criteria->compare('visible', $this->visible);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}