<?php

class StylesheetsAppsController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'StylesheetsApps'),
		));
	}

	public function actionCreate() {
		$model = new StylesheetsApps;


		if (isset($_POST['StylesheetsApps'])) {
			$model->setAttributes($_POST['StylesheetsApps']);

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
		$model = $this->loadModel($id, 'StylesheetsApps');


		if (isset($_POST['StylesheetsApps'])) {
			$model->setAttributes($_POST['StylesheetsApps']);

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
			$this->loadModel($id, 'StylesheetsApps')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('StylesheetsApps');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new StylesheetsApps('search');
		$model->unsetAttributes();

		if (isset($_GET['StylesheetsApps']))
			$model->setAttributes($_GET['StylesheetsApps']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}