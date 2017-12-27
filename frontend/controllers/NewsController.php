<?php

namespace frontend\controllers;

use Yii;
use backend\models\News;
use backend\models\NewsSearch;
use frontend\components\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends BaseController
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
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        // $searchModel = new NewsSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $query = News::find();

        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 10,
        ]);
        $pages->pageSizeParam = false;
        $models = $query
            ->offset($pages->offset)
            ->limit($pages->limit)
            //->andWhere(['id_category_news'=>[1]])
            ->orderBy('id DESC')
            ->all();

        return $this->render('index', [
           // 'searchModel' => $searchModel,
           // 'dataProvider' => $dataProvider,
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        $model = $this->findModel($id);
        $model->show_n = $model->show_n + 1;
        $model->save(false);
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    
    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    
    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
 
    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
