<?php



class PostiController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','show1','piechart','dynamiсchart'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

    /**
     * Displays a PieChart from id.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionPiechart($id)
    {



        /*Создаю модель и вызываю метод возвращабщий данные для построения графика*/
       //  var_dump(Posti::model()->getDataToPieChart(1));
        $this->render('piechart',array(
            'model'=>Posti::model()->getDataToPieChart($id), 'id'=>$id
        ));
    }

    /**
     * Displays a DynamicChart from id.
     * @param integer $id the ID of the postmodel to be displayed
     */
    public function actionDynamiсchart($id)
    {
        /*Создаю модель и вызываю метод возвращабщий данные для построения графика*/
       //  print_r(Posti::model()->getDataToDynamicChart($id));
        $this->render('dynamicchart',array(
            'model'=>Posti::model()->getDataToDynamicChart($id), 'id'=>$id
        ));
    }

    /**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Posti;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Posti']))
		{
			$model->attributes=$_POST['Posti'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Posti']))
		{
			$model->attributes=$_POST['Posti'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
       // $post=Posti::model()->findByPk(1);
       // $conPost=$post->zamer;
     // $res=Nablud::model()->findByPk(1);
     /*   var_dump($res);
        echo"--------------------------------";
       print_r(strtotime($res->datazam) * 1000);
        echo"--------------------------------";*/
     // $conPost=new InfoPost();
        //print_r($conPost);
     //  var_dump($conPost[0]);

            //var_dump($post);

          //$a=new infoPost();
        //$this->render('index',array('dat'=>$a));

		$dataProvider=new CActiveDataProvider('Posti');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}


    public function actionShow1()
    {
       echo'<H1>Привет</H1>';

        $dataProvider=new CActiveDataProvider('Posti');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }
	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Posti('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Posti']))
			$model->attributes=$_GET['Posti'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Posti the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Posti::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Posti $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='posti-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
