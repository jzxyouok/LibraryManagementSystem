<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\QueryBookInfo;
use app\models\Books;
use app\models\Borrow;
use app\models\Category;
use yii\data\ActiveDataProvider;

class SiteController extends Controller
{
    public $layout='main';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function  actionQuery(){
        $model = new QueryBookInfo;

        if ($model->load(Yii::$app->request->post()) && $model->validate() ||!empty(Yii::$app->request->get("page"))||!empty(Yii::$app->request->get("sort"))) {
            // 验证 $model 收到的数据

            $sql=Books::find();
            if(($model->bookname)=='')
                $sql->where(['NOT',['bookname'=>null]]);
            else
                $sql->where(['like','bookname',':bookname',[':bookname'=>$model->bookname]]);
           if(($model->author)=='')
                $sql->andWhere(['NOT',['author'=>null]]);
            else
                $sql->andWhere(['like','author',':author',[':author'=>$model->author]]);
            if(($model->categoryid)=='')
                $sql->andWhere(['NOT',['categoryid'=>null]]);
            else
                $sql->andWhere('categoryid=:categoryid',[':categoryid'=>$model->categoryid]);
            if(($model->publishing)=='')
                $sql->andWhere(['NOT',['publishing'=>null]]);
            else
                $sql->andWhere(['like','publishing',':publishing',[':publishing'=>$model->publishing]]);


            $dataProvider = new ActiveDataProvider([
                'query' => $sql,//此处添加where条件时：'query'=>User::find()->where(['username'=>'lizi']);
            ]);
            return $this->render('query-result', [
                'model' => $model,
                'dataProvider' => $dataProvider,

            ]);

        } else {
            // 无论是初始化显示还是数据验证错误
            $data = Category::find()->asArray()->all();

            return $this->render('query', ['model' => $model,'data'=>$data,]);
        }
    }
    public function  actionBorrow(){
        if(!Yii::$app->user->isGuest) {
            $model = Borrow::find();
            $model->joinWith('books')->where(['readerid' => Yii::$app->user->identity->id])->orderBy('loss ASC');
            $dataProvider = new ActiveDataProvider([
                'query' => $model,
            ]);
            return $this->render('hasBorrow', [
                'model' => $model,
                'dataProvider' => $dataProvider,
            ]);
        }
        else{
            $this->layout = "main";
            return $this->redirect('index.php?r=site/login');
        }
    }
}
