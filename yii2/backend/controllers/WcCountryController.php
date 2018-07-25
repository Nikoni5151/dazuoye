<?php

namespace backend\controllers;

use Yii;
use backend\models\WcCountry;
use backend\models\WcCountrySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\query;

/**
 * WcCountryController implements the CRUD actions for WcCountry model.
 */
class WcCountryController extends Controller
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
     * Lists all WcCountry models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WcCountrySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WcCountry model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        //if(!$cname == null){
        //    $qry = new query();
        //    $qry->select('*')
        //        ->from('wc_country')
        //        ->where('cname = ' . $cname);
        //    $id = $qry->one()['cid'];
        //}


        return $this->render('view', [
            'model' => $this->findModel($id),

        ]);
    }

    /**
     * Displays a single WcCountry model.
     * @param varchar $name,$tname
     * @return mixed
     */
    public function actionTeam($name,$tname)
    {
        
        $qry = new query();
        $qry->select('*')
            ->from('wc_country')
            ->where('cname = \'' . $name . '\'');
        $id = $qry->one()['cid'];
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'tname' => $tname,

        ]);
    }

    /**
     * Displays a single WcCountry model.
     * @param varchar $came,$coacname
     * @return mixed
     */
    public function actionCoach($cname,$coachname)
    {
        
        $qry = new query();
        $qry->select('*')
            ->from('wc_country')
            ->where('cname = \'' . $cname . '\'');
        $id = $qry->one()['cid'];
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'coachname' => $coachname,

        ]);
    }

    /**
     * Creates a new WcCountry model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WcCountry();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cid]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WcCountry model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cid]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WcCountry model.
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
     * Finds the WcCountry model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WcCountry the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WcCountry::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
