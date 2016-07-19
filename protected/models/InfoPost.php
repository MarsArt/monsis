<?php

/**
 * This is the model class for table "tbl_user".
 *
 * The followings are the available columns in table 'tbl_user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 */

class InfoPost extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'test';
    }





    public function primaryKey()
    {
        return 'id';
// Для составного первичного ключа следует использовать массив:
// return array('pk1', 'pk2');
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


    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
