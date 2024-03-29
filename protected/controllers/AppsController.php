<?php

class AppsController extends GxController {

	public function filters() {
		return array(
				'rights', 
				);
	}

	public function accessRules() {
		return array(
				array('allow',
					'actions'=>array('index','view'),
					'users'=>array('@'),
					),
				array('allow', 
					'actions'=>array('minicreate', 'create','update'),
					'users'=>array('@'),
					),
				array('allow', 
					'actions'=>array('admin','delete'),
					'users'=>array('admin'),
					),
				array('deny', 
					'users'=>array('*'),
					),
				);
	}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Apps'),
		));
	}

	public function actionCreate() {
		$model = new Apps;


		if (isset($_POST['Apps'])) {
			$model->setAttributes($_POST['Apps']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Apps');


		if (isset($_POST['Apps'])) {
			$model->setAttributes($_POST['Apps']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Apps')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Apps',array(
			'criteria'=>array(
				'with'=> array(
					'usersApps'=>array(
						'condition'=>'usersApps.users_id=:id',
						'params'=>array(':id'=>Yii::app()->user->id),
					),
				),
			 	'together'=>true,
			),
		));
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Apps('search');
		$model->unsetAttributes();

		if (isset($_GET['Apps']))
			$model->setAttributes($_GET['Apps']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}