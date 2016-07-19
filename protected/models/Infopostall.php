<?php

/**
 * This is the model class for table "infopostall".
 *
 * The followings are the available columns in table 'infopostall':
 * @property integer $id_nablud
 * @property integer $id_vechestva
 * @property double $result
 * @property string $datazam
 * @property string $timezam
 * @property string $Id_meteopar
 * @property integer $id_posti
 * @property integer $id_post
 * @property string $id_gorod
 * @property string $name_post
 * @property double $KoordShir
 * @property double $KoordDolg
 */
class Infopostall extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'infopostall';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_nablud, id_vechestva, id_posti, id_post', 'numerical', 'integerOnly'=>true),
			array('result, KoordShir, KoordDolg', 'numerical'),
			array('Id_meteopar, id_gorod, name_post', 'length', 'max'=>255),
			array('datazam, timezam', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_nablud, id_vechestva, result, datazam, timezam, Id_meteopar, id_posti, id_post, id_gorod, name_post, KoordShir, KoordDolg', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_nablud' => 'Id Nablud',
			'id_vechestva' => 'Id Vechestva',
			'result' => 'Result',
			'datazam' => 'Datazam',
			'timezam' => 'Timezam',
			'Id_meteopar' => 'Id Meteopar',
			'id_posti' => 'Id Posti',
			'id_post' => 'Id Post',
			'id_gorod' => 'Id Gorod',
			'name_post' => 'Name Post',
			'KoordShir' => 'Koord Shir',
			'KoordDolg' => 'Koord Dolg',
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

		$criteria->compare('id_nablud',$this->id_nablud);
		$criteria->compare('id_vechestva',$this->id_vechestva);
		$criteria->compare('result',$this->result);
		$criteria->compare('datazam',$this->datazam,true);
		$criteria->compare('timezam',$this->timezam,true);
		$criteria->compare('Id_meteopar',$this->Id_meteopar,true);
		$criteria->compare('id_posti',$this->id_posti);
		$criteria->compare('id_post',$this->id_post);
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
	 * @return Infopostall the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
