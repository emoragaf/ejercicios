<?php

class ArticulosController extends GxController {



	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Articulos'),
		));
	}

	public function actionCreate($id) {
		$model = new Articulos;


		if (isset($_POST['Articulos'])) {
			$model->setAttributes($_POST['Articulos']);
			$model->categoria_id = $id;

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
		$model = $this->loadModel($id, 'Articulos');


		if (isset($_POST['Articulos'])) {
			$model->setAttributes($_POST['Articulos']);

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
			$this->loadModel($id, 'Articulos')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Articulos');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Articulos('search');
		$model->unsetAttributes();

		if (isset($_GET['Articulos']))
			$model->setAttributes($_GET['Articulos']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}