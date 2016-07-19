<?php

/**
 * This is the model class for table "Vechestva".
 *
 * The followings are the available columns in table 'Vechestva':
 * @property integer $id_vechestva
 * @property string $name_vesh
 * @property double $PDK_ss
 * @property double $PDK_mg
 * @property integer $id_class_opasnosti
 */
class Vechestva extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Vechestva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_class_opasnosti', 'numerical', 'integerOnly'=>true),
			array('PDK_ss, PDK_mg', 'numerical'),
			array('name_vesh', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_vechestva, name_vesh, PDK_ss, PDK_mg, id_class_opasnosti', 'safe', 'on'=>'search'),
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
			'id_vechestva' => 'Id Vechestva',
			'name_vesh' => 'Name Vesh',
			'PDK_ss' => 'Pdk Ss',
			'PDK_mg' => 'Pdk Mg',
			'id_class_opasnosti' => 'Id Class Opasnosti',
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

		$criteria->compare('id_vechestva',$this->id_vechestva);
		$criteria->compare('name_vesh',$this->name_vesh,true);
		$criteria->compare('PDK_ss',$this->PDK_ss);
		$criteria->compare('PDK_mg',$this->PDK_mg);
		$criteria->compare('id_class_opasnosti',$this->id_class_opasnosti);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vechestva the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
