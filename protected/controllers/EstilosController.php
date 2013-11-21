<?php

class EstilosController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Estilos'),
		));
	}

	public function actionCreate() {
		$model = new Estilos;


		if (isset($_POST['Estilos'])) {
			$model->setAttributes($_POST['Estilos']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('view', 'id' => $model->id_estilos));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Estilos');


		if (isset($_POST['Estilos'])) {
			$model->setAttributes($_POST['Estilos']);

			if ($model->save()) {
				$this->redirect(array('view', 'id' => $model->id_estilos));
			}
		}

		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Estilos')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Estilos');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Estilos('search');
		$model->unsetAttributes();

		if (isset($_GET['Estilos']))
			$model->setAttributes($_GET['Estilos']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}