<?php

/**
 * This is the model class for table "Nablud".
 *
 * The followings are the available columns in table 'Nablud':
 * @property integer $id
 * @property integer $id_vechestva
 * @property double $result
 * @property string $datazam
 * @property string $timezam
 * @property string $Id_meteopar
 * @property integer $id_posti
 */
class Nablud extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Nablud';
	}
    public function primaryKey()
    {
        return 'id';
// Для составного первичного ключа следует использовать массив:
// return array('pk1', 'pk2');
    }
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_vechestva, id_posti', 'numerical', 'integerOnly'=>true),
			array('result', 'numerical'),
			array('Id_meteopar', 'length', 'max'=>255),
			array('datazam, timezam', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_vechestva, result, datazam, timezam, Id_meteopar, id_posti', 'safe', 'on'=>'search'),
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
            'onpost'=>array(self::BELONGS_TO,'Posti','id_posti'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_vechestva' => 'Id Vechestva',
			'result' => 'Result',
			'datazam' => 'Datazam',
			'timezam' => 'Timezam',
			'Id_meteopar' => 'Id Meteopar',
			'id_posti' => 'Id Posti',
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
		$criteria->compare('id_vechestva',$this->id_vechestva);
		$criteria->compare('result',$this->result);
		$criteria->compare('datazam',$this->datazam,true);
		$criteria->compare('timezam',$this->timezam,true);
		$criteria->compare('Id_meteopar',$this->Id_meteopar,true);
		$criteria->compare('id_posti',$this->id_posti);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Nablud the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
