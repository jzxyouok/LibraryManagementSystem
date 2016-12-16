<?php

namespace app\controllers;

use app\models\Books;
use app\models\Lossreporting;
use app\models\Memberlevel;
use app\models\Readers;
use Yii;
use app\models\Borrow;
use app\models\BorrowSearch;
use yii\base\ErrorException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BorrowController implements the CRUD actions for Borrow model.
 */
class BorrowController extends Controller
{
    /**
     * @inheritdoc
     */
    public $layout='admin';
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Borrow models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BorrowSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Borrow model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Borrow model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($bookid=null)
    {
        $model = new Borrow();

        if ($model->load(Yii::$app->request->post()) ) {
            /*
             * 读者借阅的图书一定是系统中提供的图书 判断图书、读者是否存在
               已遗失的图书不能再被借阅  判断剩余总数
               遗失图书数量不能超过馆藏图书数量 同上
               已挂失的借书证不能再借书 判断挂失
               出借天数和最多借书册书由会员级别决定 取出天数，判断已借册数
             */
            $bcount=Books::find()->where('bookid= :bookiid',[':bookiid'=>$model->bookid])->count();
            $rcount=Readers::find()->where('readerid=:readerid',[':readerid'=>$model->readerid])->count();
            if(intval($bcount)!==1||intval($rcount)!==1){
                                          Yii::$app->getSession()->setFlash('fail', '借阅证编号或图书编号无效');
                return $this->redirect('?r=books/index');
            }
            $book=Books::findOne($model->bookid);
            if(intval($book['quantity_in'])-intval($book['quantity_out'])===0){
                Yii::$app->getSession()->setFlash('fail', '剩余数量不足');
                return $this->redirect('?r=books/index');
            }
            if(Lossreporting::find()->where('readerid=:readerid',[':readerid'=>$model->readerid])->count()>0){
                Yii::$app->getSession()->setFlash('fail', '借阅证已挂失');
                return $this->redirect('?r=books/index');
            }
            $reader=Readers::findOne($model->readerid);
            $level=Memberlevel::findOne($reader->level);
            $sum=Borrow::find()->where('readerid=:readerid',[':readerid'=>$model->readerid])->count();
            if($sum>=intval($level->numbers)){
                Yii::$app->getSession()->setFlash('fail', '超出借阅上限');
                return $this->redirect('?r=books/index');
            }
            $days=$level->days;
            $model['datereturn']=date('Y-m-d',strtotime('+'.$days.' day'));

            if($model->save()){
                Yii::$app->getSession()->setFlash('success', '借阅成功');
                //$this->redirect('index.php?r=borrow');
                return $this->redirect(['view', 'id' => $model->bid]);
            }
        } else {
            $model['dateborrow']=date('Y-m-d');
            $model['bookid']=$bookid;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Borrow model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->bid]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Borrow model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Borrow model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Borrow the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Borrow::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionLoss($id){//读者遗失的图书一定是本人借阅的图书
        $lossbook=Borrow::findOne($id);
        if($lossbook->loss===null) {
            $lossbook->loss = 1;
            $book = Books::findOne($lossbook->bookid);
            $book->quantity_out = $book->quantity_out - 1;
            $book->quantity_loss = $book->quantity_loss + 1;
            if ($lossbook->save()&&$book->save()) {
                Yii::$app->getSession()->setFlash('success', '挂失成功');
                $this->redirect('index.php?r=borrow');
            }
        }

        Yii::$app->getSession()->setFlash('fail', '挂失失败');
        $this->redirect('index.php?r=borrow');
    }
    public function actionReturn($id){
        $lossbook=Borrow::findOne($id);
        if($lossbook->loss===null) {
            $lossbook->loss = 0;
            $book = Books::findOne($lossbook->bookid);
            $book->quantity_out = $book->quantity_out - 1;
            if ($book->save()&&$lossbook->save()) {
                Yii::$app->getSession()->setFlash('success', '归还成功');
                $this->redirect('index.php?r=borrow');
                return;
            }
        }
        Yii::$app->getSession()->setFlash('fail', '归还失败');
        $this->redirect('index.php?r=borrow');
    }
    public function actionMailto(){
        $readers=Borrow::find()->select(['readerid'])->distinct()->where(['loss'=>null])->asArray()->all();
        $send=false;//是否发信判断
        foreach ($readers as $reader){

            $list=Borrow::find()->where(['loss'=>null])->andWhere(['readerid'=>$reader])->asArray()->all();

            $text="<br>您好，所借图书<br>"  ;
            foreach ($list as $item){
                if(strtotime(date('Y-m-d'))>strtotime($item['datereturn'])) {
                    $book = Books::findOne($item['bookid']);
                    $text = $text . $book['bookid'] . ':' . $book['bookname'] . "未归还<br>";
                    $send=true;
                }
            }

            if($send) {
                try {
                    $receive = Readers::findOne($reader)->phone;
                }catch (ErrorException $e){

                }
                $mail = Yii::$app->mailer->compose()
                    ->setTo($receive)
                    ->setSubject('逾期提醒');
                $mail->setHtmlBody($text)->send();
            }
        }
        if($send)
            Yii::$app->getSession()->setFlash('success', '发送成功');
        else
            Yii::$app->getSession()->setFlash('fail', '没有发送对象');
        $this->redirect('index.php?r=borrow');
        /*
        $list=Borrow::find()->where(['loss'=>null])->asArray()->all();
        foreach ($list as $item){
            if(strtotime(date('Y-m-d'))>strtotime($item['datereturn'])) {
                $receive = Readers::findOne($item['readerid'])->phone;
                $book = Books::findOne($item['bookid']);

                $mail = Yii::$app->mailer->compose()

                    ->setTo($receive)
                    ->setSubject('逾期提醒')
                    ->setHtmlBody("<br>您好，所借图书" .$book->bookid.':'. $book->bookname . "逾期未归还")//发布可以带html标签的文本
                    ->send();
                if ($mail)
                    echo 'success';
                else
                    echo 'fail';
            }
        }*/
        }


}
