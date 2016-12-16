<?php

namespace app\controllers;
use app\models\Borrow;
use app\models\Readers;
use app\models\User;
use Yii;
use yii\data\ActiveDataProvider;
use app\models\QueryUserForm;
use app\models\Memberlevel;
use app\models\Lossreporting;
use app\models\Books;
class AdminController extends \yii\web\Controller
{
    public $layout='admin';
    public function actionIndex()
    {
        if(!Yii::$app->user->isGuest) {
            return $this->render('index',['layout'=>'admin']);
        }else{
            $this->layout = "main";
            return $this->render('..\site\loginwarn');
        }
    }
    public function actionBorrowlist(){
        $query =  Borrow::find()->addOrderBy('loss ASC');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        return $this->render('BorrowList', [
            //'model' => $model,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionQueryuser(){
        $model = new QueryUserForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate() ||!empty(Yii::$app->request->get("page"))||!empty(Yii::$app->request->get("sort"))) {
            $sql = Readers::find();
            if(($model->readerid)=='')
                $sql->where(['NOT',['readerid'=>null]]);
            else
                $sql->where('readerid=:readerid',[':readerid'=>$model->readerid]);
            if(($model->readername)=='')
                $sql->andWhere(['NOT',['readername'=>null]]);
            else
                $sql->andWhere(['like','readername',':readername',[':readername'=>$model->readername]]);
          //  $sql->joinWith('lossreporting')->andWhere(['readerid'=>'readerid']);
            $dataProvider = new ActiveDataProvider([
                'query' => $sql,//此处添加where条件时：'query'=>User::find()->where(['username'=>'lizi']);
            ]);

            return $this->render('UserInfo', [

                'dataProvider' => $dataProvider,

            ]);
        }
        else{
            return $this->render('QueryUser', [
                'model' => $model,


            ]);
        }
    }
    public function actionReguser(){
        $model = new Readers();

        if ($model->load(Yii::$app->request->post())&&$model->validate()) {

                $model->save();

                $user= new User();
                $user->id=$model['readerid'];
                $user->username=strval($model['readerid']);
                $user->password=strval($model['readerid']);
                $user->authKey=md5(strval($user->id).'bms');
                $user->accessToken=sha1(strval($user->id).'bms');

                $user->save();

                $data=Memberlevel::find()->asArray()->all();
                // form inputs are valid, do something here
                return $this->render('Reguser', [
                    'model' => $model,
                    'data'=>$data,
                ]);

            }
        else{
            $data=Memberlevel::find()->asArray()->all();
            $model['day']=date('Y-m-d');
            return $this->render('Reguser', [
                  'model' => $model,
                  'data'=>$data,
             ]);
        }

    }
    public function actionLoss($id){
        $loss=new Lossreporting();
        $loss->readerid=intval($id);
        $loss->lossdate=date('Y-m-d');
        $count=Lossreporting::find()->where(['readerid'=>$id])->count();


        if(intval($count)===0){
            if($loss->validate()&&$loss->save()) {

                Yii::$app->getSession()->setFlash('success', '挂失成功');
                $this->redirect('index.php?r=admin/queryuser');
            }
            print_r($loss->errors);
        }else{
            Yii::$app->getSession()->setFlash('fail', '挂失失败，已存在');
            $this->redirect('index.php?r=admin/queryuser');
        }
    }

}
