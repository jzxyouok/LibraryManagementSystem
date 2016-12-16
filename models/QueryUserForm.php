<?php
namespace app\models;
/**
 * Created by PhpStorm.
 * User: xiaomo
 * Date: 2016/11/25
 * Time: 14:20
 */
use Yii;
use yii\base\Model;
class QueryUserForm extends Model
{
    public $readerid;
    public $readername;
    public function rules()
    {
        return [
            #  [['name', 'email'], 'required'],
            # ['email', 'email'],
            [['readerid' , 'readername' ], 'safe'],
        ];
    }

}