<?php

namespace app\models {

    use Yii;

    /**
     * This is the model class for table "borrow".
     *
     * @property string $readerid
     * @property string $bookid
     * @property string $dateborrow
     * @property string $datereturn
     * @property integer $loss
     */
    class Borrow extends \yii\db\ActiveRecord
    {
        /**
         * @inheritdoc
         */
        public static function tableName()
        {
            return 'borrow';
        }

        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [['readerid', 'bookid', 'dateborrow'], 'required'],
                [['loss'], 'integer'],

                [['bookid'], 'string', 'max' => 45],
                [['dateborrow', 'datereturn'], 'string', 'max' => 11],
            ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels()
        {
            return [
                'bid'=>'序号',
                'readerid' => '读者号',
                'bookid' => '书号',
                'dateborrow' => '借书日期',
                'datereturn' => '应还日期',
                'loss' => '是否丢失（空值未归还，0挂失，1归还）',
            ];
        }
        public function getBooks(){
            return $this->hasOne(Books::classname(),['bookid'=>'bookid']);
        }
        public function getReaders(){
            return $this->hasOne(Readers::classname(),['readerid'=>'readerid']);
        }
    }
}
