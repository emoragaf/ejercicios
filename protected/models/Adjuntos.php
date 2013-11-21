<?php

Yii::import('application.models._base.BaseAdjuntos');

class Adjuntos extends BaseAdjuntos
{
	public $file;
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}