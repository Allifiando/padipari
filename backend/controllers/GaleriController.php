<?php

namespace backend\controllers;

use Yii;
use backend\models\Galeri;
use backend\models\GaleriSearch;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GaleriController implements the CRUD actions for Galeri model.
 */
class GaleriController extends Controller
{
    /**
     * @inheritdoc
     */
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
     * Lists all Galeri models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GaleriSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Galeri model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Galeri model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Galeri();

        if ($model->load(Yii::$app->request->post())) {
            $this->handleUpload($model);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    protected function handleUpload($model)
    {
        if ($model->load(Yii::$app->request->post())) {
        $model->foto = UploadedFile::getInstance($model, 'foto');

        if ($model->validate()) {
            if ($model->foto) {
                $filePath = 'uploads/' . $model->foto->baseName . '.' . $model->foto->extension;
                if ($model->foto->saveAs($filePath)) {
                    $model->foto = $filePath;
                    $model->create_at = date('Y-m-d H:i:s');        
                }
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id_galeri]);
            }
        }
    }
    }

    /**
     * Updates an existing Galeri model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $this->handleUpload($model);
            return $this->redirect(['view', 'id' => $model->id_galeri]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Galeri model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Galeri model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Galeri the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Galeri::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
