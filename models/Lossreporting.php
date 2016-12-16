<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lossreporting".
 *
 * @property string $readerid
 * @property string $lossdate
 */
class Lossreporting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lossreporting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['readerid', 'lossdate'], 'required'],

            [['lossdate'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'readerid' => '读者号',
            'lossdate' => '挂失日期',
        ];
    }
}
