<?php

class StylesheetsController extends GxController {

public function filters() {
	return array(
			'rights', 
			);
}

	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Stylesheets'),
		));
	}

	public function actionCreate() {
		$model = new Stylesheets;


		if (isset($_POST['Stylesheets'])) {
			$model->setAttributes($_POST['Stylesheets']);

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
		$model = $this->loadModel($id, 'Stylesheets');


		if (isset($_POST['Stylesheets'])) {
			$model->setAttributes($_POST['Stylesheets']);

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
			$this->loadModel($id, 'Stylesheets')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Stylesheets');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Stylesheets('search');
		$model->unsetAttributes();

		if (isset($_GET['Stylesheets']))
			$model->setAttributes($_GET['Stylesheets']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}