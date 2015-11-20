<?php

namespace backend\controllers;

use Yii;
use common\models\Items;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use common\models\ItemsTr;

/**
 * ItemsController implements the CRUD actions for Items model.
 */
class ItemsController extends Controller {

  public $layout = 'admin-layout';

  public function behaviors() {
    return [
        'verbs' => [
            'class' => VerbFilter::className(),
            'actions' => [
                'delete' => ['post'],
            ],
        ],
    ];
  }

  /**
   * Lists all Items models.
   * @return mixed
   */
  public function actionIndex() {
    $dataProvider = new ActiveDataProvider([
        'query' => Items::find(),
    ]);

    return $this->render('index', [
                'dataProvider' => $dataProvider,
    ]);
  }

  /**
   * Displays a single Items model.
   * @param integer $id
   * @return mixed
   */
  public function actionView($id) {
    return $this->render('view', [
                'model' => $this->findModel($id),
    ]);
  }

  /**
   * Creates a new Items model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   * @return mixed
   */
  public function actionCreate() {
    $model = new Items();
    $model_tr = new \common\models\ItemsTr();
    $trips_array = ArrayHelper::map(\common\models\Trips::find()->orderBy('from')->all(), 'id', function($model, $defaultValue) {
              return $model->from . '-' . $model->to;
            });
    if ($model->load(Yii::$app->request->post()) && $model->save()) {
      if ($_POST['ItemsTr']) {
        $tr = Yii::$app->request->post('ItemsTr');
        $params = [];
        foreach ($tr as $lang) {
          $lang['item_id'] = $model->id;
          array_push($params, $lang);
        }

        Yii::$app->db->createCommand()->batchInsert('items_tr', ['name', 'type', 'lang', 'item_id'], $params)->execute();
      }
      return $this->redirect(['view', 'id' => $model->id]);
    } else {
      return $this->render('create', [
                  'model' => $model,
                  'model_tr' => $model_tr,
                  'trips_array' => $trips_array,
      ]);
    }
  }

  /**
   * Updates an existing Items model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param integer $id
   * @return mixed
   */
  public function actionUpdate($id) {
    $model = $this->findModel($id);
    $model_tr = ItemsTr::findAll(array('item_id' => $id));
    $trips_array = ArrayHelper::map(\common\models\Trips::find()->orderBy('from')->all(), 'id', function($model, $defaultValue) {
              return $model->from . '-' . $model->to;
            });
    if ($model->load(Yii::$app->request->post()) && $model->save()) {
      return $this->redirect(['view', 'id' => $model->id]);
    } else {
      return $this->render('update', [
                  'model' => $model,
                  'model_tr' => $model_tr,
                  'trips_array' => $trips_array,
      ]);
    }
  }

  /**
   * Deletes an existing Items model.
   * If deletion is successful, the browser will be redirected to the 'index' page.
   * @param integer $id
   * @return mixed
   */
  public function actionDelete($id) {
    $this->findModel($id)->delete();

    return $this->redirect(['index']);
  }

  /**
   * Finds the Items model based on its primary key value.
   * If the model is not found, a 404 HTTP exception will be thrown.
   * @param integer $id
   * @return Items the loaded model
   * @throws NotFoundHttpException if the model cannot be found
   */
  protected function findModel($id) {
    if (($model = Items::findOne($id)) !== null) {
      return $model;
    } else {
      throw new NotFoundHttpException('The requested page does not exist.');
    }
  }

}
