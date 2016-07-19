<?php

/**
 * This is the model class for table "allresult".
 *
 * The followings are the available columns in table 'allresult':
 * @property double $result
 * @property string $name_post
 * @property double $KoordShir
 * @property double $KoordDolg
 * @property integer $id_vesh
 * @property string $name_vesh
 * @property double $PDK_ss
 * @property double $PDK_mg
 * @property string $datazam
 * @property string $timezam
 * @property integer $id_posti
 * @property integer $id_vechestva
 * @property integer $post_id
 * @property integer $id
 */
class Allresult extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'allresult';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_vesh, id_posti, id_vechestva, post_id, id', 'numerical', 'integerOnly'=>true),
			array('result, KoordShir, KoordDolg, PDK_ss, PDK_mg', 'numerical'),
			array('name_post, name_vesh', 'length', 'max'=>255),
			array('datazam, timezam', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('result, name_post, KoordShir, KoordDolg, id_vesh, name_vesh, PDK_ss, PDK_mg, datazam, timezam, id_posti, id_vechestva, post_id, id', 'safe', 'on'=>'search'),
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
			'result' => 'Result',
			'name_post' => 'Name Post',
			'KoordShir' => 'Koord Shir',
			'KoordDolg' => 'Koord Dolg',
			'id_vesh' => 'Id Vesh',
			'name_vesh' => 'Name Vesh',
			'PDK_ss' => 'Pdk Ss',
			'PDK_mg' => 'Pdk Mg',
			'datazam' => 'Datazam',
			'timezam' => 'Timezam',
			'id_posti' => 'Id Posti',
			'id_vechestva' => 'Id Vechestva',
			'post_id' => 'Post',
			'id' => 'ID',
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

		$criteria->compare('result',$this->result);
		$criteria->compare('name_post',$this->name_post,true);
		$criteria->compare('KoordShir',$this->KoordShir);
		$criteria->compare('KoordDolg',$this->KoordDolg);
		$criteria->compare('id_vesh',$this->id_vesh);
		$criteria->compare('name_vesh',$this->name_vesh,true);
		$criteria->compare('PDK_ss',$this->PDK_ss);
		$criteria->compare('PDK_mg',$this->PDK_mg);
		$criteria->compare('datazam',$this->datazam,true);
		$criteria->compare('timezam',$this->timezam,true);
		$criteria->compare('id_posti',$this->id_posti);
		$criteria->compare('id_vechestva',$this->id_vechestva);
		$criteria->compare('post_id',$this->post_id);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Allresult the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
