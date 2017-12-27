<?php

namespace backend\controllers;

use Yii;
use backend\models\Links;
use backend\models\LinksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * LinksController implements the CRUD actions for Links model.
 */
class LinksController extends Controller
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
     * Lists all Links models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LinksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Links model.
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
     * Creates a new Links model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Links();
        $model->active = 1;

        if ($model->load(Yii::$app->request->post()) ) {

        $model->fileuz = UploadedFile::getInstance($model,'fileuz');
        $model->fileru = UploadedFile::getInstance($model,'fileru');
        $model->fileen = UploadedFile::getInstance($model,'fileen');
        $model->filex = UploadedFile::getInstance($model,'filex');

        if ($model->fileuz) {
        $imageNameuz=Yii::$app->getSecurity()->generateRandomString().'.'.$model->fileru->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageNameuz;
        $model->fileuz->saveAs( $upload_path.'.'.$model->fileuz->extension );
        $model->uz_img = $imageNameuz.'.'.$model->fileuz->extension;
        }
        if ($model->fileru) {
        $imageNameru=Yii::$app->getSecurity()->generateRandomString().'.'.$model->fileru->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageNameru;
        $model->fileru->saveAs( $upload_path.'.'.$model->fileru->extension);
        $model->ru_img = $imageNameru.'.'.$model->fileru->extension;
        }
        if ($model->fileen) {
        $imageNameen=Yii::$app->getSecurity()->generateRandomString().'.'.$model->fileen->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageNameen;
        $model->fileen->saveAs( $upload_path.'.'.$model->fileen->extension);
        $model->en_img = $imageNameen.'.'.$model->fileen->extension;
        }
        if ($model->filex) {
        $imageNamex=Yii::$app->getSecurity()->generateRandomString().'.'.$model->filex->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageNamex;
        $model->filex->saveAs( $upload_path.'.'.$model->filex->extension);
        $model->x_img = $imageNamex.'.'.$model->filex->extension;
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
     * Updates an existing Links model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) ) {

         $model->fileuz = UploadedFile::getInstance($model,'fileuz');
        $model->fileru = UploadedFile::getInstance($model,'fileru');
        $model->fileen = UploadedFile::getInstance($model,'fileen');
        $model->filex = UploadedFile::getInstance($model,'filex');

        if ($model->fileuz) {
        $imageNameuz=Yii::$app->getSecurity()->generateRandomString().'.'.$model->fileru->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageNameuz;
        $model->fileuz->saveAs( $upload_path.'.'.$model->fileuz->extension );
        $model->uz_img = $imageNameuz.'.'.$model->fileuz->extension;
        }
        if ($model->fileru) {
        $imageNameru=Yii::$app->getSecurity()->generateRandomString().'.'.$model->fileru->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageNameru;
        $model->fileru->saveAs( $upload_path.'.'.$model->fileru->extension);
        $model->ru_img = $imageNameru.'.'.$model->fileru->extension;
        }
        if ($model->fileen) {
        $imageNameen=Yii::$app->getSecurity()->generateRandomString().'.'.$model->fileen->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageNameen;
        $model->fileen->saveAs( $upload_path.'.'.$model->fileen->extension);
        $model->en_img = $imageNameen.'.'.$model->fileen->extension;
        }
        if ($model->filex) {
        $imageNamex=Yii::$app->getSecurity()->generateRandomString().'.'.$model->filex->extension;
        $upload_path = Yii::getAlias('@frontend/web/uploads/').$imageNamex;
        $model->filex->saveAs( $upload_path.'.'.$model->filex->extension);
        $model->x_img = $imageNamex.'.'.$model->filex->extension;
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
     * Deletes an existing Links model.
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
     * Finds the Links model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Links the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Links::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
