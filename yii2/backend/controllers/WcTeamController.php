<?php

namespace backend\controllers;

use Yii;
use backend\models\WcTeam;
use backend\models\WcTeamSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\query;

/**
 * WcTeamController implements the CRUD actions for WcTeam model.
 */
class WcTeamController extends Controller
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
     * Lists all WcTeam models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcTeamSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WcTeam model.
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
     * Displays a single WcTeam model.
     * @param varchar $coachname
     * @return mixed
     */
    public function actionCoach($coachname)
    {
        $qry = new query();
        $qry->select('*')
            ->from('wc_team')
            ->where('coachname = \'' . $coachname . '\'');
        $id = $qry->all()[0]['tid'];

        return $this->render('view', [
            'model' => $this->findModel($id),
            'coachname' => $coachname,
        ]);
    }

    /**
     * Displays a country's WcTeam model.
     * @param varchar $pname
     * @return mixed
     */
    public function actionCountry($cname)
    {
        $qry = new query();
        $qry->select('*')
            ->from('wc_team')
            ->where('cname = \'' . $cname . '\'');
        $id = $qry->all()[0]['tid'];

        return $this->render('view', [
            'model' => $this->findModel($id),
            'cname' => $cname,
        ]);
    }

    /**
     * Displays a country's WcTeam model.
     * @param integer $tid,varchar $pname
     * @return mixed
     */
    public function actionPlayer($tid,$pname)
    {
        $id = $tid;

        return $this->render('view', [
            'model' => $this->findModel($id),
            'pname' => $pname,
        ]);
    }

    /**
     * Displays a country's WcTeam model.
     * @param varchar $tname
     * @return mixed
     */
    public function actionMatch($tname)
    {
        $qry = new query();
        $qry->select('*')
            ->from('wc_team')
            ->where('tname = \'' . $tname . '\'');
        $id = $qry->all()[0]['tid'];

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new WcTeam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcTeam();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->tid]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcTeam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->tid]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcTeam model.
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
     * Finds the WcTeam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WcTeam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WcTeam::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
