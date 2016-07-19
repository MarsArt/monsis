<?php

class MainController extends Controller
{
	public function actionIndex()
	{

      // var_dump(Posti::model()->getJavaPlacemark());

		$this->render('index',array('placemark'=>Posti::model()->getJavaPlacemark()));

	}

    public function actionIza(){

        $this->render('iza',array('dataGraf'=>Posti::model()->getDataToIza(),'tabl'=>'информация'));
    }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}