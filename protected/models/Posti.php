<?php

/**
 * This is the model class for table "Posti".
 *
 * The followings are the available columns in table 'Posti':
 * @property integer $id
 * @property string $id_gorod
 * @property string $name_post
 * @property double $KoordShir
 * @property double $KoordDolg
 */
class Posti extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Posti';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('KoordShir, KoordDolg', 'numerical'),
			array('id_gorod, name_post', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_gorod, name_post, KoordShir, KoordDolg', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
    public function primaryKey()
    {
        return 'id';
// Для составного первичного ключа следует использовать массив:
// return array('pk1', 'pk2');
    }
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'zamer'=>array(self::HAS_MANY,'Nablud','id_posti'),
            //'avarageResult'=>array(self::stat,'Nablud','id_posti','select'=>'');
		);
	}
    /**
     * Returns the string contain data to IZA.
     *
     * @param int id id Posta.
     * @return string in json
     */
    public function getDataToIza(){

        $criteria=new CDbCriteria;
        $criteria->select='AVG(result) as result, koef, name_post, name_vesh, id_posti, PDK_ss, id_vechestva';
        $criteria->group='name_vesh';
        $res=Allresult::model()->findAll($criteria);
        $restoret="";
       // var_dump($res);
        foreach($res as $oneres){
            $restoret.='["'.$oneres->name_vesh.'", '.pow(($oneres->result/$oneres->PDK_ss),$oneres->koef).'],';
        }
       //
        return substr($restoret, 0, strlen($restoret)-1);
    }
    /**
     * Returns the string contain data to build pie chart.
     *
     * @param int id id Posta.
     * @return string in json
     */
    public function getDataToPieChart($id){

        $criteria=new CDbCriteria;
        $criteria->select='AVG(result) as result, name_post, name_vesh, id_posti, id_vechestva';
        $criteria->group='name_vesh';
        $criteria->condition='id_posti=:postID';
        $criteria->params=array(':postID'=>$id);
        $res=Allresult::model()->findAll($criteria);
      $restoret="";
      foreach($res as $oneres){
          $restoret.='{label: "'.$oneres->name_vesh.'",  data: '.$oneres->result.'},';
      }
       return substr($restoret, 0, strlen($restoret)-1);
    }
    /**
     * Returns the string contain data to build pie linechart.
     *
     * @param int id id Posta.
     * @return string in json
     */
    public function getDataToDynamicChart($id){

        $criteriaF=new CDbCriteria;
        $criteriaF->select='id_vechestva, name_vesh';
        $criteriaF->condition='id_posti=:postID';
        $criteriaF->params=array(':postID'=>$id);
        $criteriaF->group='id_vechestva';

        $topereb=$res=Allresult::model()->findAll($criteriaF);
        $criteria=new CDbCriteria;

        $criteria->select='result, name_post, name_vesh, id_posti, id_vechestva, timezam';
        $restoret="";
        foreach($topereb as $onevech){
            $criteria->condition='id_posti=:postID AND id_vechestva=:id_vech';
            $criteria->params=array(':postID'=>$id, ':id_vech'=>$onevech->id_vechestva);
            $res=Allresult::model()->findAll($criteria);
            $restoret.='"'.$onevech->name_vesh.'": {
                                label: "'.$onevech->name_vesh.'",
                                    data:[';
            $i=0;
            foreach($res as $onezam){
                $restoret.='['./*$onezam->timezam*/$i.', '.$onezam->result.'],';
                $i++;
            }
            $restoret=substr($restoret, 0, strlen($restoret)-1);
             $restoret.=']},';
        }

        return substr($restoret, 0, strlen($restoret)-1);

    }



    /**
     * Returns the string contain data to build pie linechart.
     *
     * @param int id id Posta.
     * @return string in json
     */
    public function getJavaPlacemark(){


        $res=Posti::model()->findAll();
        $str='';
        foreach($res as $oneres){
            $str.='var myPlacemark = new ymaps.Placemark(
				['.$oneres->KoordShir.','.$oneres->KoordDolg.'], {
				iconContent: "'.$oneres->id.'",
				balloonContentHeader: \'<strong>'.$oneres->name_post.'</strong>\',
				balloonContentBody: \'Содержимое<em><br>'.
                 CHtml::link('Динамика изменения концентрации','index.php?r=posti/dynamiсchart&id='.$oneres->id).
                 CHtml::link('<br>Долевая часть','index.php?r=posti/piechart&id='.$oneres->id).
                 CHtml::link('<br>информация о посту','index.php?r=posti/view&id='.$oneres->id)
				.'</em>\'
				},
				{
				preset: \'islands#yellowStretchyIcon\',
				}

			);
			//--------------------------------------
			';
            $str.='
            myMap.geoObjects.add(myPlacemark);
            ';
        }
        return $str;


    }


    /**
     * @return array customized attribute labels (name=>label)
     */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_gorod' => 'Id города',
			'name_post' => 'Название поста',
			'KoordShir' => 'Широта',
			'KoordDolg' => 'Долгота',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_gorod',$this->id_gorod,true);
		$criteria->compare('name_post',$this->name_post,true);
		$criteria->compare('KoordShir',$this->KoordShir);
		$criteria->compare('KoordDolg',$this->KoordDolg);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Posti the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
