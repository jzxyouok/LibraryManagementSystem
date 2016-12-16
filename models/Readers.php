<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "readers".
 *
 * @property integer $readerid             
 * @property string $readername
 * @property string $sex
 * @property string $birthday
 * @property string $phone
 * @property string $mobile
 * @property string $cardname
 * @property string $cardid
 * @property integer $level
 * @property string $day
 *
 * @property Memberlevel $level0
 */
class Readers extends \yii\db\ActiveRecord
{
  /*  public $readerid;
    public $readername;
    public $sex;
    public $birthday;
    public $phone;
    public $mobile;
    public $cardname;
    public $cardid;
    public $level;
    public $day;*/
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'readers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['readername', 'sex', 'birthday', 'mobile','phone', 'cardname', 'cardid', 'level', 'day'], 'required'],
            [[ 'level'], 'integer'],
            [['readername', 'cardname'], 'string', 'max' => 10],
            [['sex'], 'string', 'max' => 4],
            [['birthday', 'mobile', 'day'], 'string', 'max' => 11],
           // [['phone'], 'string', 'max' => 12],
            [['phone'], 'email'],
            [['cardid'], 'string', 'max' => 18],
          //  [['level'], 'exist', 'skipOnError' => true,'targetClass' => Memberlevel::className(),  'targetAttribute' => ['level' => 'level']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'readerid' => '读者号',
            'readername' => '读者姓名',
            'sex' => '性别',
            'birthday' => '生日',
            'phone' => '邮箱',
            'mobile' => '移动电话',
            'cardname' => '证件名',
            'cardid' => '证件号',
            'level' => '会员级别',
            'day' => '办证日期',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
 //    public function getLevel0()
//      {
 //        return $this->hasOne(Memberlevel::className(), ['level' => 'level']);
//     }
    public function getLossreporting(){
        return $this->hasOne(Lossreporting::classname(),['readerid'=>'readerid']);
    }
}
