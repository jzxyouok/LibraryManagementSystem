<?php
/**
 * Created by PhpStorm.
 * User: xiaomo
 * Date: 2016/11/18
 * Time: 16:56
 */
namespace app\models;

use Yii;
use yii\base\Model;

class QueryBookInfo extends Model
{
    public $bookname;
    public $categoryid;
    public $author;
    public $publishing;

    public function rules()
    {
        return [
          #  [['name', 'email'], 'required'],
           # ['email', 'email'],
           [['bookname' , 'categoryid' ,'author','publishing'], 'safe'],
        ];
    }
}