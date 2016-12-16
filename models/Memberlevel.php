<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "memberlevel".
 *
 * @property integer $level
 * @property integer $days
 * @property integer $numbers
 * @property integer $fee
 *
 * @property Readers[] $readers
 */
class Memberlevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'memberlevel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level', 'days', 'numbers', 'fee'], 'required'],
            [['level', 'days', 'numbers', 'fee'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'level' => 'Level',
            'days' => 'Days',
            'numbers' => 'Numbers',
            'fee' => 'Fee',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReaders()
    {
        return $this->hasMany(Readers::className(), ['level' => 'level']);
    }
}
