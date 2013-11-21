<?php

class LineasController extends GxController {


	public function actionView($id) {
		$this->render('view', array(
			'model' => $this->loadModel($id, 'Lineas'),
		));
	}

	public function actionCreate($id) {
		$model = new Lineas;
		$model->articulos_id = $id;

		if (isset($_POST['Lineas'])) {
			$articulo = Articulos::model()->findByPk($id);
			$model->setAttributes($_POST['Lineas']);
			$adjunto = new Adjuntos;
			$adjunto->setAttributes($_POST['Adjuntos']);
			$adjunto->file = CUploadedFile::getInstance($adjunto,'filename');
			if(!empty($adjunto->file))
			{
				$adjunto->filename=$adjunto->file->name;
				$adjunto->created_at = time();
				$adjunto->extension = $adjunto->file->getExtensionName();
				if( !file_exists ( Yii::getPathOfAlias('webroot').'/files/Apps/'.$articulo->categoria->app_id.'/'.$id.'/' )){
					mkdir(Yii::getPathOfAlias('webroot').'/files/Apps/'.$articulo->categoria->app_id.'/'.$id.'/',0755, true);
				}
				$adjunto->path = Yii::getPathOfAlias('webroot').'/files/Apps/'.$articulo->categoria->app_id.'/'.$id.'/';	
				$transaction = Yii::app()->db->beginTransaction();
				try {
					$model->imagen = $path.$filename;
				    if ($model->save()) {       
						if ($adjunto->save()) {
							$path = $adjunto->path;
							$pathLink = Yii::app()->baseUrl.'/files/Apps/'.$articulo->categoria->app_id.'/'.$id.'/';
        					$filename = $adjunto->id.'.'.$adjunto->file->getExtensionName();
        					$model->imagen = $pathLink.$filename;
        					$model->save();
						    $foo = new AdjuntosLineas;
							$foo->id_linea = $model->id;
							$foo->id_adjunto = $adjunto->id;	
						    if ($foo->save()) {
					        	if($adjunto->file->saveAs($path.$filename))
					        	{
					            $transaction->commit();
					            $this->redirect(array('/articulos/view','id'=>$id));
					        		
					        	}
						    }
						}    
					}
				   $transaction->rollback();    
				} 
				catch (Exception $ex) {
				    $transaction->rollback();
				}
			}
			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('articulos/view', 'id' => $model->articulos_id));
			}
		}

		$this->render('create', array( 'model' => $model));
	}

	public function actionUpdate($id) {
		$model = $this->loadModel($id, 'Lineas');
		$model->latex = ltrim($model->latex,"\\");
		$model->latex = ltrim($model->latex,'(');
		$model->latex = rtrim($model->latex,")");
		$model->latex = rtrim($model->latex,"\\");
		if (isset($_POST['Lineas'])) {
			$articulo = Articulos::model()->findByPk($id);
			$model->setAttributes($_POST['Lineas']);
			if(!empty($model->latex))
			{
				$model->latex = '\('.$model->latex.'\)';
			}
			$adjunto = new Adjuntos;
			$adjunto->setAttributes($_POST['Adjuntos']);
			$adjunto->file = CUploadedFile::getInstance($adjunto,'filename');
			
			if(!empty($adjunto->file))
			{
				$adjunto->filename=$adjunto->file->name;
				$adjunto->created_at = time();
				$adjunto->extension = $adjunto->file->getExtensionName();
				if( !file_exists ( Yii::getPathOfAlias('webroot').'/files/Apps/'.$articulo->categoria->app_id.'/'.$id.'/' )){
					mkdir(Yii::getPathOfAlias('webroot').'/files/Apps/'.$articulo->categoria->app_id.'/'.$id.'/',0755, true);
				}
				$adjunto->path = Yii::getPathOfAlias('webroot').'/files/Apps/'.$articulo->categoria->app_id.'/'.$id.'/';
				
			
				$transaction = Yii::app()->db->beginTransaction();
				try {
				    if ($model->save()) {       
						if ($adjunto->save()) {
							$path = $adjunto->path;
							$pathLink = Yii::app()->baseUrl.'/files/Apps/'.$articulo->categoria->app_id.'/'.$id.'/';
        					$filename = $adjunto->id.'.'.$adjunto->file->getExtensionName();
        					$model->imagen = $pathLink.$filename;
        					$model->save();
						    $foo = new AdjuntosLineas;
							$foo->id_linea = $model->id;
							$foo->id_adjunto = $adjunto->id;	
						    if ($foo->save()) {
					        	if($adjunto->file->saveAs($path.$filename))
					        	{
					            $transaction->commit();
					            $this->redirect(array('/articulos/view','id'=>$id));
					        		
					        	}
						    }
						}      
					}
				   $transaction->rollback();    
				} 
				catch (Exception $ex) {
				    $transaction->rollback();
				}
			}
			if ($model->save()) {
				if (Yii::app()->getRequest()->getIsAjaxRequest())
					Yii::app()->end();
				else
					$this->redirect(array('articulos/view', 'id' => $model->articulos_id));
			}
		}
		$this->render('update', array(
				'model' => $model,
				));
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$linea = $this->loadModel($id, 'Lineas');
			$articulo = $linea->articulos_id;
			$linea->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('articulos/view','id'=>$articulo));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Lineas');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Lineas('search');
		$model->unsetAttributes();

		if (isset($_GET['Lineas']))
			$model->setAttributes($_GET['Lineas']);

		$this->render('admin', array(
			'model' => $model,
		));
	}

}