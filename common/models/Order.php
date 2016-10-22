<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
/**
 * Created by PhpStorm.
 * User: ryakoviv
 * Date: 24.09.2016
 * Time: 12:49
 */
class Order extends ActiveRecord{
    public static function tableName(){
        return "order";
    }

    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            ['email', 'email'],
        ];
    }
}