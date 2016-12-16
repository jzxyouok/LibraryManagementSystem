<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property string $bookid
 * @property string $bookname
 * @property string $author
 * @property string $publishing
 * @property integer $categoryid
 * @property double $price
 * @property string $datein
 * @property integer $quantity_in
 * @property integer $quantity_out
 * @property integer $quantity_loss
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookid', 'bookname', 'quantity_in', 'quantity_out', 'quantity_loss'], 'required'],
            [['categoryid', 'quantity_in', 'quantity_out', 'quantity_loss'], 'integer'],
            [['price'], 'number'],
            [['datein'], 'safe'],
            [['bookid', 'publishing'], 'string', 'max' => 45],
            [['bookname', 'author'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bookid' => '书号',
            'bookname' => '书名',
            'author' => '作者',
            'publishing' => '出版社',
            'categoryid' => '分类号',
            'price' => '价格',
            'datein' => '入库时间',
            'quantity_in' => '总数',
            'quantity_out' => '已借出',
            'quantity_loss' => '丢失数',
        ];
    }
    public function getCategory(){
        return $this->hasOne(Category::classname(),['categoryid'=>'categoryid']);
    }
}
