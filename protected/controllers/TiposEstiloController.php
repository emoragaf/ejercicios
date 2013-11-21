<?php

class TiposEstiloController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'TiposEstilos'),
		));
	}

	public function actionCreate() {
		$model = new TiposEstilos;


		if (isset($_POST['TiposEstilos'])) {
			$model->setAttributes($_POST['TiposEstilos']);

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
		$model = $this->loadModel($id, 'TiposEstilos');


		if (isset($_POST['TiposEstilos'])) {
			$model->setAttributes($_POST['TiposEstilos']);

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
			$this->loadModel($id, 'TiposEstilos')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('TiposEstilos');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new TiposEstilos('search');
		$model->unsetAttributes();

		if (isset($_GET['TiposEstilos']))
			$model->setAttributes($_GET['TiposEstilos']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}