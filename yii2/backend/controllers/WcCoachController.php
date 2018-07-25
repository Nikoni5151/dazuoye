<?php

namespace backend\controllers;

use Yii;
use backend\models\WcCoach;
use backend\models\WcCoachSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\query;

/**
 * WcCoachController implements the CRUD actions for WcCoach model.
 */
class WcCoachController extends Controller
{
    public $layout = "main_layout";
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
     * Lists all WcCoach models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcCoachSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Lists all WcCoach models.
     * @param  varchar $cname
     * @return mixed
     */
    public function actionCountry($cname)
    {
        $searchModel = new WcCoachSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where('cname = \'' . $cname . '\'');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'cname' => $cname,
        ]);
    }

    /**
     * Displays a single WcCoach model.
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
     * Displays a team’s WcCoach model.
     * @param varchar $name,$tname
     * @return mixed
     */
    public function actionTeam($name,$tname)
    {
        $qry = new query();
        $qry->select('*')
            ->from('wc_coach')
            ->where('coachname = \'' . $name . '\'');
        $id = $qry->one()['coachid'];

        return $this->render('view', [
            'model' => $this->findModel($id),
            'tname' => $tname
        ]);
    }

    /**
     * Creates a new WcCoach model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcCoach();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->coachid]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcCoach model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->coachid]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcCoach model.
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
     * Finds the WcCoach model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WcCoach the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WcCoach::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
