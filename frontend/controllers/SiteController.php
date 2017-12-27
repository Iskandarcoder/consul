<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use frontend\components\BaseController;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use backend\models\News;
use backend\models\Service;
use backend\models\Quotation;
use backend\models\Book;
use backend\models\InfoEmbassy;
use backend\models\InfoUzb;
use backend\models\Links;
use backend\models\Symbol;
use backend\models\Video;
use backend\models\Photo;

/**
 * Site controller
 */
class SiteController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * @inheritdoc
     */
   
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {  

        $slide_news = News::find()->andWhere(['slider'=>[1],'active'=>[1],'id_category_news'=>[1]])->orderBy('id DESC')->limit(6)->all();
        $top_news = News::find()->andWhere(['active'=>[1],'id_category_news'=>[1]])->orderBy('id DESC')->limit(6)->all();
        $services = Service::find()->andWhere(['active'=>[1]])->orderBy('order_s ASC')->all();
        $eventsone = News::find()->andWhere(['id_category_news'=>[2], 'active'=>[1]])->orderBy('id DESC')->limit(2)->all();
        $eventstwo = News::find()->andWhere(['id_category_news'=>[2], 'active'=>[1]])->orderBy('id DESC')->limit(2)->offset(2)->all();
        $quotation = Quotation::find()->andWhere(['active'=>[1]])->orderBy('id DESC')->limit(4)->all();
        $embassy_news = News::find()->andWhere(['active'=>[1],'id_category_news'=>[1]])->orderBy('id DESC')->limit(8)->all();
        $embassy_news1 = News::find()->andWhere(['active'=>[1],'id_category_news'=>[1]])->orderBy('id DESC')->limit(8)->offset(16)->all();
        $embassy_news2 = News::find()->andWhere(['active'=>[1],'id_category_news'=>[1]])->orderBy('id DESC')->limit(16)->offset(24)->all();
        $books = Book::find()->andWhere(['active'=>[1]])->orderBy('id DESC')->limit(4)->all();
        $info_embassy = InfoEmbassy::find()->orderBy('id DESC')->limit(1)->all();
        $info_uzbekistanone = InfoUzb::find()->andWhere(['active'=>[1]])->orderBy('id ASC')->limit(7)->all();
        $info_uzbekistantwo = InfoUzb::find()->andWhere(['active'=>[1]])->orderBy('id ASC')->limit(7)->offset(7)->all();
        $links = Links::find()->andWhere(['active'=>[1]])->orderBy('id DESC')->all();
        $symbols = Symbol::find()->orderBy('id ASC')->all();
        $videos = Video::find()->orderBy('id DESC')->all();
        $photos = Photo::find()->orderBy('id DESC')->limit(12)->all();

        return $this->render('index',[
             'slide_news' => $slide_news,
             'top_news' => $top_news,
             'services' => $services,
             'eventsone' => $eventsone,
             'eventstwo' => $eventstwo,
             'quotation' => $quotation,
             'embassy_news' => $embassy_news,
             'embassy_news1' => $embassy_news1,
             'embassy_news2' => $embassy_news2,
             'books' => $books,
             'info_embassy'=> $info_embassy,
             'info_uzbekistanone' => $info_uzbekistanone,
             'info_uzbekistantwo' => $info_uzbekistantwo,
             'links'=>$links,
             'symbols'=>$symbols,
             'videos'=>$videos,
             'photos'=>$photos,

        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionSearch($q = NULL)
    {

       // echo $q;
        // $this->layout = 'columnAgency';
        if($q){
            $model = new \frontend\models\Search();
            $model->q = $q;
            $result = $model->search();
        }else{
            $result = [];
        }
        
        return $this->render('search', [
            'result' => $result
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    // public function actionSignup()
    // {
    //     $model = new SignupForm();
    //     if ($model->load(Yii::$app->request->post())) {
    //         if ($user = $model->signup()) {
    //             if (Yii::$app->getUser()->login($user)) {
    //                 return $this->goHome();
    //             }
    //         }
    //     }

    //     return $this->render('signup', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
