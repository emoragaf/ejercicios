<?php

class CategoriasController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Categorias'),
		));
	}

	public function actionCreate($app,$cat = null) {
		$model = new Categorias;
		$model->app_id = $app;

		if(!empty($cat))
		{
			$model->padre = $cat;
		}

		if (isset($_POST['Categorias'])) {
			$model->setAttributes($_POST['Categorias']);

			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('/apps/view', 'id' => $model->app_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Categorias');


		if (isset($_POST['Categorias'])) {
			$model->setAttributes($_POST['Categorias']);

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
			$cat =$this->loadModel($id, 'Categorias');
			$appId = $cat->app_id;
			$cat->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('/apps/view','id'=>$appId));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Categorias');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Categorias('search');
		$model->unsetAttributes();

		if (isset($_GET['Categorias']))
			$model->setAttributes($_GET['Categorias']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}