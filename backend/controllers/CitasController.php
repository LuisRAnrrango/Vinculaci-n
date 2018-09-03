<?php

namespace backend\controllers;

use Yii;
use backend\models\Citas;
use backend\models\search\CitasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CitasController implements the CRUD actions for Citas model.
 */
class CitasController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Citas models.
     * @return mixed
     */
        public function actionInicio()
    {
        return $this->render("inicio");
    }
    public function actionIndex()
    {
        
               if(Yii::$app->user->can('Index-citas')){ 
        $searchModel = new CitasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
         }else{
            
             $searchModel = new CitasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('Index_Pacientes', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
            
//            throw new ForbiddenHttpException;
            
           
        
            
        }
        
    }

    /**
     * Displays a single Citas model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Citas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        
      if(Yii::$app->user->can('create-citas')){   
        $model = new Citas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDCITA]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
         }else{
            throw new ForbiddenHttpException;
            
            
        }
    }

    /**
     * Updates an existing Citas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
          if(Yii::$app->user->can('update-citas')){
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IDCITA]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
         }else{
           
              $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
              return $this->redirect(['view','id' => $model->IDCITA]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
             
        }
    }

    /**
     * Deletes an existing Citas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Citas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Citas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Citas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
