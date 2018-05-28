<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\data\Pagination;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\PendaftaranForm;
use backend\models\Relawan;
use backend\models\Agenda;
use backend\models\Blog;
use backend\models\Galeri;
use backend\models\Kritiksaran;


/**
 * Site controller
 */
class SiteController extends Controller
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
     * @return mixed
     */
    public function actionIndex()
    {
        $model = Galeri::find()->limit(4)->all();
        return $this->render('index',['model'=>$model]);
    }

    public function actionProfil()
    {
        return $this->render('profil');
    }

    public function actionAgenda($id)
    {
        $blog = Blog::find()->all();
        $agendaCount = Agenda::find()->count();

        $jmlPage = 3;
        if($id == 1) {
            $agenda = Agenda::find()
                ->select("agenda.*, galeri.*")
                ->leftJoin("galeri","galeri.id_galeri = agenda.id_galeri")
                ->limit($jmlPage)
                ->offset(0)
                ->asArray()
                ->all();   
        }
        else {
            $agenda = Agenda::find()
                ->select("agenda.*, galeri.foto")
                ->leftJoin("galeri","galeri.id_galeri = agenda.id_galeri")
                ->limit($id*$jmlPage)
                ->offset(($id-1)*$jmlPage)
                ->asArray()
                ->all();
        
        }
              
        return $this->render('agenda',[
            'agenda'=>$agenda,
            'blog'=>$blog, 
            'agendaCount'=>ceil($agendaCount/$jmlPage)
        ]);
    }

    public function actionAgendaview($id)
    {
        $blog = Blog::find()->all();        
        $model = Agenda::find()
            ->select('agenda.*, galeri.*')
            ->leftJoin('galeri','galeri.id_galeri = agenda.id_galeri')
            ->where(['id_agenda'=>$id])
            ->asArray()
            ->one();;
        $agenda = Agenda::find()
            ->select("agenda.*, galeri.*")
            ->leftJoin("galeri","galeri.id_galeri = agenda.id_galeri")            
            ->asArray()
            ->all();    
        return $this->render('agenda-view',['model'=>$model,'agenda'=>$agenda,'blog'=>$blog]);
    }

    public function actionBlogview($id)
    {
        $agenda = Agenda::find()->all();
        $blog = Blog::find()
            ->select('blog.*, galeri.*')
            ->leftJoin('galeri','galeri.id_galeri = blog.id_galeri')
            ->where(['publish'=>'y'])
            ->asArray()
            ->all();        
        $model = Blog::find()
            ->select('blog.*, galeri.*')
            ->leftJoin('galeri','galeri.id_galeri = blog.id_galeri')
            ->where(['id_blog'=>$id])
            ->asArray()
            ->one();

        return $this->render('blog-view',['key'=>$model,'blog'=>$blog,'agenda'=>$agenda]);
    }

    public function actionPendaftaran($id)
    {
        
        $model = new PendaftaranForm();
        $tabel = new Relawan();

        $agenda = Agenda::find()
        ->select('agenda.*, galeri.*')
        ->leftJoin('galeri', 'galeri.id_galeri = agenda.id_galeri')
        ->where(['id_agenda'=>$id])->asArray()->one();
        
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $tabel->nama = $model->nama;
            $tabel->no_telp = $model->no_telp;
            $tabel->email = $model->email;
            $tabel->line = $model->line;
            $tabel->instagram = $model->instagram;
            $tabel->agenda_id = $agenda['id_agenda'];
            $tabel->tgl_daftar = date('Y-m-d');

            if($tabel->save())
            {
                return $this->redirect(['index']);
            }
        }
        else
        {
            return $this->render('pendaftaran',['model'=>$model,'key'=>$agenda]);
        }
        
    }

    public function actionBlog($id)
    {
        $agenda = Agenda::find()->all();
        $blogCount = Blog::find()->where(['publish'=>'y'])->count();
        
        $jmlPage = 3;
        if($id == 1) {
            $blog = Blog::find()
                ->select('blog.*, galeri.foto')
                ->leftJoin('galeri','galeri.id_galeri = blog.id_galeri')
                ->where(['publish'=>'y'])
                ->limit($jmlPage)
                ->offset(0)
                ->asArray()
                ->all();
        }
        else {
            $blog = Blog::find()
                ->select("blog.*, galeri.foto")
                ->leftJoin("galeri","galeri.id_galeri = blog.id_galeri")
                ->where(['publish'=>'y'])
                ->limit($id*$jmlPage)
                ->offset(($id-1)*$jmlPage)
                ->asArray()
                ->all();
        
        }

        return $this->render('blog',[
            'blog'=>$blog,
            'agenda'=>$agenda, 
            'blogCount'=>ceil($blogCount/$jmlPage)
        ]);
    }

    public function actionGaleri()
    {
        $galeri = Galeri::find()->all();
        return $this->render('galeri',['galeri'=>$galeri]);
    }

    public function actionKontak()
    {
        $model = new Kritiksaran();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['kontak']);
        } else {
            return $this->render('kontak', [
                'model' => $model,
            ]);
        }
    }

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

    public function actionDetailBlog($id)
    {
        
        return $this-render('detailBlog');
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
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

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
