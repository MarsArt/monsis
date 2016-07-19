<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Максим
 * Date: 01.06.14
 * Time: 21:04
 * To change this template use File | Settings | File Templates.
 */

class Adapter {

    public static $model=null;

   function __construct($mod){
       self::$model=$mod;
   }

    public static function getDataToPieChart($id){

     // var_dump(self::$model[0]);


       /*  foreach($this->model as $elem){

         }*/
    }

}