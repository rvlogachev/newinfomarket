<?php

namespace frontend\controllers;

use common\commands\command\SendEmailCommand;
use common\components\FrontController;
use common\components\Helper;
use common\models\Article;
use common\models\ArticleAttachment;
use common\models\ArticleCategory;
use common\models\TblTag;
use frontend\models\search\ArticleSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class ArticleController extends Controller
{
    public $layout = 'blog';

    /**
     * @return string
     */
    public function actionIndex()
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
            Helper::SentUniSend($_GET['subscribe'],0,'15504197');

            Yii::$app->getSession()->setFlash('alert', [
                'body' => Yii::t('frontend', 'Данные успешно отправлены. Вы успешно подписаны.'),
                'options' => ['class' => 'alert-success']
            ]);
        }


        $searchModel = new ArticleSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->sort = [
            'defaultOrder' => ['created_at' => SORT_DESC]
        ];
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionList($query)
    {
        $models = TblTag::find()->andFilterWhere(['like','name',$query])->all();
        $items = [];

        foreach ($models as $model) {
            $items[] = ['name' => $model->name];
        }
        // We know we can use ContentNegotiator filter
        // this way is easier to show you here :)
        Yii::$app->response->format = Response::FORMAT_JSON;

        return $items;
    }

    /**
     * @param $slug
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($category = '', $slug = '')
    {
        $model = Article::find()->published()->andWhere(['slug' => $slug])->one();
        if (!$model) {
            throw new NotFoundHttpException;
        }

        $viewFile = $model->view ?: 'view';
        return $this->render($viewFile, ['model' => $model]);
    }

    public function actionCategory($category)
    {

        $model = ArticleCategory::find()->andWhere(['slug' => $category])->one();

        if (!$model) {
            throw new NotFoundHttpException;
        }

        $searchModel = new ArticleSearch();
        /*---------Vanya ****/
        //$searchModel->category_id = $model->id;

        $dataProvider = $searchModel->search(['category_id' => $model->id]);

        $dataProvider->sort = [
            'defaultOrder' => ['created_at' => SORT_DESC]
        ];


        return $this->render('category', ['model' => $model, 'dataProvider' => $dataProvider]);
    }


    /**
     * @param $id
     * @return $this
     * @throws NotFoundHttpException
     * @throws \yii\web\HttpException
     */
    public function actionAttachmentDownload($id)
    {
        $model = ArticleAttachment::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException;
        }

        return Yii::$app->response->sendStreamAsFile(
            Yii::$app->fileStorage->getFilesystem()->readStream($model->path),
            $model->name
        );
    }


}
