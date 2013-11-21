<?php

class UsersAppsController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'UsersApps'),
		));
	}

	public function actionCreate() {
		$model = new UsersApps;


		if (isset($_POST['UsersApps'])) {
			$model->setAttributes($_POST['UsersApps']);

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
		$model = $this->loadModel($id, 'UsersApps');


		if (isset($_POST['UsersApps'])) {
			$model->setAttributes($_POST['UsersApps']);

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
			$this->loadModel($id, 'UsersApps')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('UsersApps');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new UsersApps('search');
		$model->unsetAttributes();

		if (isset($_GET['UsersApps']))
			$model->setAttributes($_GET['UsersApps']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}