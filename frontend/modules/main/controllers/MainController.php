<?php
namespace app\modules\main\controllers;
use frontend\models\SignupForm;
use frontend\models\Image;
use frontend\models\ContactForm;

class MainController extends \yii\web\Controller
{
    public $layout = 'inner';
    
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
    
    
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionRegister() {
        $model = new SignupForm;
        
//        if(\Yii::$app->request->isAjax && \Yii::$app->request->isPost )
//        {
//            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
//            return \yii\bootstrap\ActiveForm::validate($model);
//        }
        
        if($model->load(\Yii::$app->request->post()) && $model->validate())
        { //&& $model->validate()
            print_r(\Yii::$app->request->post());
            die;
        }
        
        return $this->render('register',['model' => $model]);
    }
    
     public function actionContact() {
        $model = new ContactForm;
        

        
        return $this->render('contact',['model' => $model]);
    }

}
