<?php

namespace backend\controllers;

use Yii;
use backend\models\Symbol;
use backend\models\SymbolSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * SymbolController implements the CRUD actions for Symbol model.
 */
class SymbolController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Symbol models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SymbolSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Symbol model.
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
     * Creates a new Symbol model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Symbol();

        if ($model->load(Yii::$app->request->post())) {

        $model->file = UploadedFile::getInstance($model,'file');

        if ($model->file) {
        $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageName;
        $model->file->saveAs( $upload_path.'.'.$model->file->extension );
        $model->img = $imageName.'.'.$model->file->extension;
        }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Symbol model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

        $model->file = UploadedFile::getInstance($model,'file');

        if ($model->file) {
        $imageName=Yii::$app->getSecurity()->generateRandomString().'.'.$model->file->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageName;
        $model->file->saveAs( $upload_path.'.'.$model->file->extension );
        $model->img = $imageName.'.'.$model->file->extension;
        }
            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Symbol model.
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
     * Finds the Symbol model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Symbol the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Symbol::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}