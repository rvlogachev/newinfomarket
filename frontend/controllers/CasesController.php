<?php

namespace frontend\controllers;



use Yii;
use  common\modules\prpart\models\Cases;
use common\models\ArticleCategory;
use  common\widgets\Cases\models\CasesSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CasesController implements the CRUD actions for Cases model.
 */
class CasesController extends  Controller
{
    public function behaviors()
    {
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
     * Lists all Cases models.
     * @return mixed
     */
    public function actionIndex()
    {

        $this->layout = 'base';


        $query = Cases::find()->active();


        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);


        //  VarDumper::dump($dataProviderLandings->getModels(),10,true); die();

        return $this->render('index',['dataProvider'=>$dataProvider,
                                      'categories' => ArticleCategory::find()->active()->all() ]);




    }

    /**
     * Displays a single Cases model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id, $slug)
    {

        if (isset($_GET['subscribe'])) {
            $sentSuccess = Yii::$app->commandBus->handle(new SendEmailCommand([
                'view' => '@frontend/mail/layouts/subscribe_notif',
                'params' => [
                    'email' => isset($_GET['subscribe']) ? $_GET['subscribe'] : '',
                ],
                'subject' => 'Подписка INFOMARKETSTUDIO.RU',
                'to' => getenv('ROBOT_EMAIL')
            ]));
            Yii::$app->getSession()->setFlash('alert', [
                'body' => Yii::t('frontend', 'Данные   отправлены. Вы успешно подписаны.'),
                'options' => ['class' => 'alert-success']
            ]);
        }


        $this->layout = 'base';
        $otherProjects = Cases::find()->where(['not in','id', $id])->orderBy('updated_at')->active()->limit(3)->all();

        $model  =  Cases::find()->where([
            'id' => $id,
            'slug'=> $slug
        ])->one();

        if ($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');

//        if (Yii::$app->request->url != $model->url)
//            $this->redirect($model->url, true);

        return $this->render('view', [
            'model' => $model,
            'otherProjects' => $otherProjects
        ]);



    }

    /**
     * Creates a new Cases model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = 'base';
        $model = new Cases();
        $model->setScenario('insert');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cases model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $this->layout = 'base';
        $model = $this->findModel($id);
        $model->setScenario('update');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cases model.
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
     * Finds the Cases model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cases the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cases::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
