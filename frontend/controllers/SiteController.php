<?php

namespace frontend\controllers;

use common\behaviors\AccessLogBehavior;
use common\commands\command\SendEmailCommand;
use common\components\AccessUser;
use common\components\ActionsEvent;
use common\components\FrontController;
use common\components\Helper;
use common\models\GeoRegion;
use common\modules\bot\Request;
use common\modules\integration\components\AmocrmHelper;
use kartik\form\ActiveForm;
use Yii;
use frontend\models\ContactForm;
use yii\helpers\VarDumper;
use yii\web\Controller;

use DialogFlow\Model\Query;
use DialogFlow\Client;
use DialogFlow\Method\QueryApi;
use DialogFlow\Dialog;

use common\components\CustomActionMapping;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{


    public $layout = 'base';

    public function beforeAction($action)
    {
        //  if ($action->id === 'index')   {
        $this->enableCsrfValidation = false;
        // }
        return parent::beforeAction($action);
    }


    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'view' => 'error',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null
            ],
            'set-locale' => [
                'class' => 'common\actions\SetLocaleAction',
                'locales' => array_keys(Yii::$app->params['availableLocales'])
            ],

            'telegram' => [
                'class' => 'common\modules\bot\controllers\Actions\TelegramAction'
            ],
            'vk' => [
                'class' => 'common\modules\bot\controllers\Actions\VkAction'
            ],
            'whatsapp' => [
                'class' => 'common\modules\bot\controllers\Actions\WhatsappAction'
            ],
            'facebook' => [
                'class' => 'common\modules\bot\controllers\Actions\FacebookAction'
            ],
            'viber' => [
                'class' => 'common\modules\bot\controllers\Actions\ViberAction'
            ],
        ];
    }


    public function actionIndex()
    {
        $this->layout = 'main';

        $contactForm = new  ContactForm();

        $subscribe = Yii::$app->request->get('subscribe',null);
        if($subscribe !== null){
            Helper::SentUniSend($subscribe,0,'15504197');
            Yii::$app->getSession()->setFlash('alert', [
                'body' => Yii::t('frontend', 'Спасибо, за подписку.'),
                'options' => ['class' => 'alert-success']
            ]);

        }


        return $this->render('index', [
            'contactForm' => $contactForm
        ]);
    }

    public function actionChatbot()
    {
        $this->layout = 'main';

        $contactForm = new  ContactForm();

        return $this->render('chatbot', [
            'contactForm' => $contactForm
        ]);
    }

//    public function actionTheme () {
//        $this->layout = 'theme';
//        return $this->render('theme' );
//    }
    public function actionWebdev()
    {
        $this->layout = 'main';

        $contactForm = new  ContactForm();

        return $this->render('webdev', [
            'contactForm' => $contactForm
        ]);
    }

    public function actionWrh7o()
    {
        $this->layout = 'base1';

        $contactForm = new  ContactForm();

        return $this->render('wrh7o', [
            'contactForm' => $contactForm
        ]);
    }

    public function actionMessenger($phone, $button)
    {

        if ($phone) {
            if ($button == 'vk') {
                $queryUrl = 'https://infomarket.bitrix24.ru/rest/1/35w2h9b3mvnq9itr/crm.lead.add.json';
                $queryData = http_build_query(array(
                    'fields' => array(
                        "TITLE" => "Лид с мобильной формы",
                        "NAME" => "Вконтакте",
                        "LAST_NAME"=> "infomarketstudio.ru/wrh7o",
                        "STATUS_ID" => "NEW",
                        "OPENED" => "Y",
//                "UTM_TERM" => $utm_term,
//                "UTM_SOURCE" => $utm_source,
//                "UTM_CONTENT" => $utm_content,
//                "UTM_CAMPAIGN" => $utm_campaign,
//                "UTM_MEDIUM" => $utm_medium,
                        "ASSIGNED_BY_ID" => 1,
                        // "SECOND_NAME" => $referer,
                        "PHONE" => array(array("VALUE" => $phone, "VALUE_TYPE" => "WORK" )),
                    ),
                    'params' => array("REGISTER_SONET_EVENT" => "Y")
                ));

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_POST => 1,
                    CURLOPT_HEADER => 0,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $queryUrl,
                    CURLOPT_POSTFIELDS => $queryData,
                ));
                $result = curl_exec($curl);
                curl_close($curl);

                Helper::SentUniSend(0,$phone,'15506005');



                return $this->redirect('https://vk.com/im?sel=-144890336');
            }
            if ($button == 'tlg') {
                $queryUrl = 'https://infomarket.bitrix24.ru/rest/1/35w2h9b3mvnq9itr/crm.lead.add.json';
                $queryData = http_build_query(array(
                    'fields' => array(
                        "TITLE" => "Лид с мобильной формы",
                        "NAME" => "Телеграмм",
                        "LAST_NAME"=> "infomarketstudio.ru/wrh7o",
                        "STATUS_ID" => "NEW",
                        "OPENED" => "Y",
//                "UTM_TERM" => $utm_term,
//                "UTM_SOURCE" => $utm_source,
//                "UTM_CONTENT" => $utm_content,
//                "UTM_CAMPAIGN" => $utm_campaign,
//                "UTM_MEDIUM" => $utm_medium,
                        "ASSIGNED_BY_ID" => 1,
                        // "SECOND_NAME" => $referer,
                        "PHONE" => array(array("VALUE" => $phone, "VALUE_TYPE" => "WORK" )),
                    ),
                    'params' => array("REGISTER_SONET_EVENT" => "Y")
                ));

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_POST => 1,
                    CURLOPT_HEADER => 0,
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $queryUrl,
                    CURLOPT_POSTFIELDS => $queryData,
                ));
                $result = curl_exec($curl);
                curl_close($curl);

                Helper::SentUniSend(0,$phone,'15506005');
                return $this->redirect('https://tele.click/infomarketstudiobot?start=doc');
            }
        }
    }

//    public function actionAnalytic()
//    {
//        $this->layout = 'main';
//
//        $contactForm = new  ContactForm();
//
//        return $this->render('analytic', [
//            'contactForm' => $contactForm
//        ]);
//    }
//
//    public function actionAdvertise()
//    {
//        $this->layout = 'main';
//
//        $contactForm = new  ContactForm();
//
//        return $this->render('advertise', [
//            'contactForm' => $contactForm
//        ]);
//    }

//    public function actionChat()
//    {
//        $this->layout = 'main';
//
//
//
//        return $this->render('chat', [
//
//        ]);
//    }


    public function actionSearch()
    {
        $this->layout = 'main';



        return $this->render('search', [

        ]);
    }


//    public function actionOrderanalytics()
//    {
//        $this->layout = 'main';
//
//
//        $geo='';
//        $modelGeo = GeoRegion::find()->where([
//            'city' => trim(isset(AccessUser::getDetect('geo')['city']) ? AccessUser::getDetect('geo')['city'] : ''),
//        ])->one();
//        if ($modelGeo) {
//            $geo = $modelGeo->id;
//        }
//
//        $phone =filter_var(isset($_POST['ContactForm']['tel']) ? $_POST['ContactForm']['tel'] : '', FILTER_SANITIZE_NUMBER_INT);
//        $name =  filter_var( isset($_POST['ContactForm']['name']) ? $_POST['ContactForm']['name'] : '' , FILTER_SANITIZE_STRING);
//        $source_form =  filter_var( isset($_POST['ContactForm']['source_form']) ? $_POST['ContactForm']['source_form'] : '', FILTER_SANITIZE_STRING);
//
//        $request = Yii::$app->request;
//        if ($request->isPost) {
//            $order_id = Helper::addOrder(
//                'infomarketstudio',
//                $geo,
//                Yii::$app->session->get('show'),
//                '0',
//                $phone,
//                $name,
//                $source_form,
//                0
//            );
//
//            $event = new ActionsEvent();
//            $event->order_id = $order_id;
//            $this->attachBehavior('AccessLogBehavior', new AccessLogBehavior());
//            $this->trigger(ActionsEvent::ORDER_ACTIONS, $event);
//            return $this->render('orderanalytics');
//        }else{
//            throw new NotFoundHttpException('Страницы не существует');
//
//        }
//
//
//
//    }

    public function actionOrderkp()
    {
        $this->layout = 'main';

        $geo='';
//        $modelGeo = GeoRegion::find()->where([
//            'city' => trim(isset(AccessUser::getDetect('geo')['city']) ? AccessUser::getDetect('geo')['city'] : ''),
//        ])->one();
//        if ($modelGeo) {
//            $geo = $modelGeo->id;
//        }


//        $request = Yii::$app->request;
//        if ($request->isPost) {
//            $order_id = Helper::addOrder(
//                'infomarketstudio',
//                $geo,
//                Yii::$app->session->get('show'),
//                '0',
//                isset($_POST['ContactForm']['tel']) ? $_POST['ContactForm']['tel'] : '',
//                isset($_POST['ContactForm']['name']) ? $_POST['ContactForm']['name'] : '',
//                isset($_POST['ContactForm']['source_form']) ? $_POST['ContactForm']['source_form'] : '',
//                0
//            );
//
//            $event = new ActionsEvent();
//            $event->order_id = $order_id;
//            $this->attachBehavior('AccessLogBehavior', new AccessLogBehavior());
//            $this->trigger(ActionsEvent::ORDER_ACTIONS, $event);
//            return $this->render('orderkp');
//        }else{
//            throw new NotFoundHttpException('Страницы не существует');
//
//        }

        return $this->render('orderkp');


    }

    public function actionOrderbot()
    {

        $contactForm = new  ContactForm();


        $phone = Yii::$app->request->post('phone');





        if (Yii::$app->request->isAjax && $contactForm->load(Yii::$app->request->post())) {  // если получаем AJAX и POST запрос
            $lead = Yii::$app->amocrm->lead;
            //   $lead->debug(false); // Режим отладки
            $lead['name'] = $contactForm->name." ".$phone;
            // $lead['date_create'] = '-2 DAYS';
            $lead['tags'] = ['infomarketstudio.ru'];
            //   $lead['visitor_uid'] = '12345678-52d2-44c2-9e16-ba0052d9f6d6';
            $idLead = $lead->apiAdd();
            // print_r($idLead);
            // $contact = Yii::$app->amocrm->contact;
            // $contact->debug(true); // Режим отладки
            // $contact['name'] = 'Заявка из сайта';
            //  $idContact = $contact->apiAdd();
            // print_r($idContact);
            //  $link = Yii::$app->amocrm->links;
            //   $link['from'] = 'leads';
            // $link['from_id'] =$idLead;
            //   $link['to'] = 'contacts';
            //  $link['to_id'] =$idContact;
            //$link->apiLink();


            $bot = new \common\modules\bot\Bot('telegram');
            $data = [];
            $data['chat_id'] = 201378424;//'@chatbotbusiness'; //201378424;
            $data['text'] ="Заполнена форма infomarketstudio.ru\r\nимя: ". $contactForm->name."\r\nтел: ".$phone;
            $data['parse_mode'] = 'HTML';
            $result = Request::sendMessage($data);


            $bot = new \common\modules\bot\Bot('telegram');
            $data = [];
            $data['chat_id'] = 47195363;//'@chatbotbusiness'; //201378424;
            $data['text'] ="Заполнена форма infomarketstudio.ru\r\nимя: ". $contactForm->name."\r\nтел: ".$phone;
            $data['parse_mode'] = 'HTML';
            $result = Request::sendMessage($data);

            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($contactForm); // выполняем валидацию формы
        }else{

        }


        $this->layout = 'main';
//
//        $geo='';
//        $modelGeo = GeoRegion::find()->where([
//            'city' => trim(isset(AccessUser::getDetect('geo')['city']) ? AccessUser::getDetect('geo')['city'] : ''),
//        ])->one();
//        if ($modelGeo) {
//            $geo = $modelGeo->id;
//        }
      //  echo "<pre>";
        $request = Yii::$app->request;
        if ($request->isPost) {




//            $order_id = Helper::addOrder(
//                'infomarketstudio',
//                $geo,
//                Yii::$app->session->get('show'),
//                '0',
//                isset($_POST['ContactForm']['tel']) ? $_POST['ContactForm']['tel'] : '',
//                isset($_POST['ContactForm']['name']) ? $_POST['ContactForm']['name'] : '',
//                isset($_POST['ContactForm']['source_form']) ? $_POST['ContactForm']['source_form'] : '',
//
//                0
//            );

//            $event = new ActionsEvent();
//            $event->order_id = $order_id;
//            $this->attachBehavior('AccessLogBehavior', new AccessLogBehavior());
//            $this->trigger(ActionsEvent::ORDER_ACTIONS, $event);
            return $this->render('orderbot');
        }else{
            throw new NotFoundHttpException('Страницы не существует');

        }


    }

    public function actionOrdersite()
    {
        $this->layout = 'main';

//        $geo='';
//        $modelGeo = GeoRegion::find()->where([
//            'city' => trim(isset(AccessUser::getDetect('geo')['city']) ? AccessUser::getDetect('geo')['city'] : ''),
//        ])->one();
//        if ($modelGeo) {
//            $geo = $modelGeo->id;
//        }

        $request = Yii::$app->request;
        if ($request->isPost) {
//            $order_id = Helper::addOrder(
//                'infomarketstudio',
//                $geo,
//                Yii::$app->session->get('show'),
//                '0',
//                isset($_POST['ContactForm']['tel']) ? $_POST['ContactForm']['tel'] : '',
//                isset($_POST['ContactForm']['name']) ? $_POST['ContactForm']['name'] : '',
//                isset($_POST['ContactForm']['source_form']) ? $_POST['ContactForm']['source_form'] : '',
//                0
//            );
//
//            $event = new ActionsEvent();
//            $event->order_id = $order_id;
//            $this->attachBehavior('AccessLogBehavior', new AccessLogBehavior());
//            $this->trigger(ActionsEvent::ORDER_ACTIONS, $event);
            return $this->render('ordersite');
        }else{
            throw new NotFoundHttpException('Страницы не существует');

        }

    }



//    public function actionGetaudit()
//    {
//        $this->layout = 'main';
//
//        $geo='';
//        $modelGeo = GeoRegion::find()->where([
//            'city' => trim(isset(AccessUser::getDetect('geo')['city']) ? AccessUser::getDetect('geo')['city'] : ''),
//        ])->one();
//        if ($modelGeo) {
//            $geo = $modelGeo->id;
//        }
//
//        $request = Yii::$app->request;
//        if ($request->isPost) {
//            $order_id = Helper::addOrder(
//                'infomarketstudio',
//                $geo,
//                Yii::$app->session->get('show'),
//                '0',
//                isset($_POST['ContactForm']['tel']) ? $_POST['ContactForm']['tel'] : '',
//                isset($_POST['ContactForm']['name']) ? $_POST['ContactForm']['name'] : '',
//                isset($_POST['ContactForm']['source_form']) ? $_POST['ContactForm']['source_form'] : '',
//
//                0
//            );
//
//            $event = new ActionsEvent();
//            $event->order_id = $order_id;
//            $this->attachBehavior('AccessLogBehavior', new AccessLogBehavior());
//            $this->trigger(ActionsEvent::ORDER_ACTIONS, $event);
//            return $this->render('getaudit');
//        }else{
//            throw new NotFoundHttpException('Страницы не существует');
//
//        }
//
//
//    }

    public function actionSupport()
    {
        $this->layout = 'main';
        return $this->render('support');
    }
    public function actionAgreement()
    {
        $this->layout = 'main';
        return $this->render('agreement');
    }
    public function actionCondition()
    {
        $this->layout = 'main';
        return $this->render('condition');
    }

    public function actionAnalytics()
    {
        $this->layout = 'main';
        return $this->render('analytics');
    }

    public function actionTunel()
    {
        $this->layout = 'main';


        $contactForm = new  ContactForm();





            \Yii::info(" NO phone !!   ", 'infostudiobot');






        return $this->render('tunel', [
            'contactForm' => $contactForm
        ]);


    }

    public function actionInfostudiobotwebhook()
    {


        \Yii::info(print_r(json_encode($_POST), true), 'chat');

        if (Yii::$app->request->isPost) {

            $returnData = [
                "speech" => "support",
                "source" => "support",
                "displayText" => "support",
                "contextOut" => [],
                "data" => [
                    "telegram" => ["support"]
                ]
            ];


            $response = Yii::$app->response;
            $response->format = \yii\web\Response::FORMAT_JSON;
            $response->data = $returnData;

            \Yii::info(print_r(json_encode($response->data), true), 'chat');


            return $response;


        }
    }

    public function actionInfostudiobot()
    {


        \Yii::info("actionInfostudiobot\r\n", 'chat');
        \Yii::info(var_dump(Yii::$app->request->post()), 'chat');

        if (Yii::$app->request->isPost) {

            $returnData = [
                "speech" => "Ваша заявка успешно оформлена.",
                "source" => "Ваша заявка успешно оформлена.",
                "displayText" => "Ваша заявка успешно оформлена.",
                "contextOut" => [],
                "data" => [
                    "telegram" => ["Ваша заявка успешно оформлена. "]
                ]
            ];


            $response = Yii::$app->response;
            $response->format = \yii\web\Response::FORMAT_JSON;
            $response->data = $returnData;

            //  \Yii::info(Yii::$app->request->isPost, 'chat');


            return $response;

        }


//        try {
//            $client = new Client('fbac2f73e82f4b3ebb91a339ff57a708');
//            $queryApi = new QueryApi($client);
//            $actionMapping = new CustomActionMapping();
//            $dialog = new Dialog($queryApi, $actionMapping);
//
//            // Start dialog ..
//            $tmp = $dialog->create('1234567890', 'Хочу разработать сайт', 'ru');
//
//
//
//        } catch (\Exception $error) {
//            echo $error->getMessage();
//        }


//        try {
        //      $client = new Client('fbac2f73e82f4b3ebb91a339ff57a708');
//            $queryApi = new QueryApi($client);
//
//            $meaning = $queryApi->extractMeaning('Привет', [
//                'sessionId' => '1234567890',
//                'lang' => 'en',
//            ]);
//            $response = new Query($meaning);
//
//
//            var_dump($response);
//
//        } catch (\Exception $error) {
//            echo $error->getMessage();
//        }


    }

    public function actionEmail()
    {


        $this->layout = 'main';
        return $this->render('email');
    }

    public function actionRtc()
    {
        $this->layout = 'main';
        return $this->render('rtc');
    }

    public function actionUtp()
    {
        $this->layout = 'main';
        return $this->render('utp');
    }

    public function actionSuccess()
    {


        if (isset($_POST['MainForm']['phone'])) {
            $order_id = Helper::addOrder(
                false,
                '',
                0,
                '',
                isset($_POST['MainForm']['phone']) ? $_POST['MainForm']['phone'] : '',
                isset($_POST['MainForm']['name']) ? $_POST['MainForm']['name'] : '',
                0
            );

            $sentSuccess = Yii::$app->commandBus->handle(new SendEmailCommand([
                'view' => '@frontend/mail/layouts/order_notif',
                'params' => [
                    'name' => isset($_POST['MainForm']['name']) ? $_POST['MainForm']['name'] : '',
                    'phone' => isset($_POST['MainForm']['phone']) ? $_POST['MainForm']['phone'] : '',
                    'email' => isset($_POST['MainForm']['email']) ? $_POST['MainForm']['email'] : '',
                ],
                'subject' => 'Заявка INFOMARKETSTUDIO.RU',
                'to' => getenv('ROBOT_EMAIL')
            ]));

            Yii::$app->getSession()->setFlash('alert', [
                'body' => Yii::t('frontend', 'Данные успешно отправлены'),
                'options' => ['class' => 'alert-success']
            ]);

            $event = new ActionsEvent();
            $event->name = isset($_POST['MainForm']['name']) ? $_POST['MainForm']['name'] : '';
            $event->email = isset($_POST['MainForm']['email']) ? $_POST['MainForm']['email'] : '';
            $event->phone = isset($_POST['MainForm']['phone']) ? $_POST['MainForm']['phone'] : '';

//            $event->params = $_SERVER;
//            $this->attachBehavior('AccessLogBehavior', new AccessLogBehavior());
//            $this->trigger(ActionsEvent::INFOMARKET_FORMS_EVENT, $event);


        }
        $this->layout = 'base';
        return $this->render('success', [
            'name' => isset($_POST['MainForm']['name']) ? $_POST['MainForm']['name'] : '',
            'phone' => isset($_POST['MainForm']['phone']) ? $_POST['MainForm']['phone'] : '',
            'email' => isset($_POST['MainForm']['email']) ? $_POST['MainForm']['email'] : '',
        ]);

    }

    public function actionContact()
    {


        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => Yii::t('frontend', 'Thank you for contacting us. We will respond to you as soon as possible.'),
                    'options' => ['class' => 'alert-success']
                ]);
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => \Yii::t('frontend', 'There was an error sending email.'),
                    'options' => ['class' => 'alert-danger']
                ]);
            }
        }

        return $this->render('contact', [
            'model' => $model
        ]);
    }

    public function actionAbout()
    {


        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => Yii::t('frontend', 'Thank you for contacting us. We will respond to you as soon as possible.'),
                    'options' => ['class' => 'alert-success']
                ]);
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => \Yii::t('frontend', 'There was an error sending email.'),
                    'options' => ['class' => 'alert-danger']
                ]);
            }
        }

        return $this->render('about', [
            'model' => $model
        ]);
    }

    public function actionService()
    {


        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => Yii::t('frontend', 'Thank you for contacting us. We will respond to you as soon as possible.'),
                    'options' => ['class' => 'alert-success']
                ]);
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => \Yii::t('frontend', 'There was an error sending email.'),
                    'options' => ['class' => 'alert-danger']
                ]);
            }
        }

        return $this->render('service', [
            'model' => $model
        ]);
    }

    public function actionMarketing()
    {


        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => Yii::t('frontend', 'Thank you for contacting us. We will respond to you as soon as possible.'),
                    'options' => ['class' => 'alert-success']
                ]);
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => \Yii::t('frontend', 'There was an error sending email.'),
                    'options' => ['class' => 'alert-danger']
                ]);
            }
        }

        return $this->render('marketing', [
            'model' => $model
        ]);
    }

    public function actionCases()
    {


        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => Yii::t('frontend', 'Thank you for contacting us. We will respond to you as soon as possible.'),
                    'options' => ['class' => 'alert-success']
                ]);
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => \Yii::t('frontend', 'There was an error sending email.'),
                    'options' => ['class' => 'alert-danger']
                ]);
            }
        }

        return $this->render('cases', [
            'model' => $model
        ]);
    }

    public function actionPartners()
    {


        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->contact(Yii::$app->params['adminEmail'])) {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => Yii::t('frontend', 'Thank you for contacting us. We will respond to you as soon as possible.'),
                    'options' => ['class' => 'alert-success']
                ]);
                return $this->refresh();
            } else {
                Yii::$app->getSession()->setFlash('alert', [
                    'body' => \Yii::t('frontend', 'There was an error sending email.'),
                    'options' => ['class' => 'alert-danger']
                ]);
            }
        }

        return $this->render('partners', [
            'model' => $model
        ]);
    }

    public function actionAlice(){
        /**
         * Получаем запрос пользователя
         */
        $dataRow = file_get_contents('php://input');
        header('Content-Type: application/json');
        /**
         * Здесь будет ответ
         */
        $response = '';
        /**
         * Впишите сюда своё активационное имя
         */
        $mySkillName = 'Студия Инфомаркет';
        try{
            if (!empty($dataRow)) {
                /**
                 * Простейший лог, чтобы проверять запросы. Закомментируйте эту стрчоку, если он вам не нужен
                 */
                file_put_contents('alisalog.txt', date('Y-m-d H:i:s') . PHP_EOL . $dataRow . PHP_EOL, FILE_APPEND);

                /**
                 * Преобразуем запрос пользователя в массив
                 */
                $data = json_decode($dataRow, true);

                /**
                 * Проверяем наличие всех необходимых полей
                 */
                if (!isset($data['request'], $data['request']['command'], $data['session'], $data['session']['session_id'], $data['session']['message_id'], $data['session']['user_id'])) {
                    /**
                     * Нет всех необходимых полей. Не понятно, что вернуть, поэтому возвращаем ничего.
                     */
                    $result = json_encode([]);
                } else {
                    /**
                     * Получаем что конкретно спросил пользователь
                     */
                    $text = $data['request']['command'];

                    /**
                     * Приводим на всякий случай запрос пользователя к нижнему регистру
                     */
                    $textToCheck = strtolower($text);

                    if (strpos($text, $mySkillName) !== false) {
                        $response = json_encode([
                            'version' => '1.0',
                            'session' => [
                                'session_id' => $data['session']['session_id'],
                                'message_id' => $data['session']['message_id'],
                                'user_id' => $data['session']['user_id']
                            ],
                            'response' => [
                                'text' => "Здравствуйте. Вы запустили навык {$mySkillName}. Используя этот навык Вы можете обратиться для заказа услуг и получения информации по разработке чат ботов. Для заказа услуг используйте навык Разработка  ботов Инфомаркет ",
                                /**
                                 * Ставьте плюсик перед гласной, на которую делается ударение.
                                 * Если вам нужна пауза, добавьте " - ", т.е. дефис с пробелом до и после него.
                                 */
                                'tts' => "Здравствуйте. Вы запустили навык {$mySkillName}. Используя этот навык Вы можете обратиться для заказа услуг и получения информации по разработке чат ботов. Для заказа услуг используйте навык Разработка  ботов Инфомаркет",
                                'buttons' => []
                            ]
                        ]);
                    } elseif($text == 'помощь') {
                        $response = json_encode([
                            'version' => '1.0',
                            'session' => [
                                'session_id' => $data['session']['session_id'],
                                'message_id' => $data['session']['message_id'],
                                'user_id' => $data['session']['user_id']
                            ],
                            'response' => [
                                'text' => 'Вы можете обратиться для заказа услуг и получения информации по разработке чат ботов. Для заказа услуг используйте навык Разработка  ботов Инфомаркет.',
                                'tts' => '',
                                'buttons' => []
                            ]
                        ]);
                    } else {
                        /**
                         * Здесь опишите логику обработки запроса пользователя.
                         * Например, давайте возвращать количество символов в запросе пользователя.
                         */
                        $answer = strlen($text);



                        $client = new Client(env('DIALOG_TOKEN'));

                        $queryApi = new QueryApi($client);
                        $meaning = $queryApi->extractMeaning($text, [
                            'sessionId' => $data['session']['session_id'],
                            'lang' => 'ru',
                        ]);
                        $response = new Query($meaning);
                        $out = $response->getResult()->getFulfillment()->getSpeech();


                        $response = json_encode([
                            'version' => '1.0',
                            'session' => [
                                'session_id' => $data['session']['session_id'],
                                'message_id' => $data['session']['message_id'],
                                'user_id' => $data['session']['user_id']
                            ],
                            'response' => [
                                'text' => $out,
                                'tts' => $out,
                                'buttons' => [],

                                'end_session' => false
                            ]
                        ]);

                    }
                }
            } else {
                $response = json_encode([
                    'version' => '1.0',
                    'session' => 'Error',
                    'response' => [
                        'text' => 'Отсутствуют данные',
                        'tts' =>  'Отсутствуют данные'
                    ]
                ]);
            }

            echo $response;
        } catch(\Exception $e){
            echo '["Error occured"]';
        }
    }

    /**
     * Instagram
     * @return string|Response
     */

    public function actionInst()
    {




        return $this->render('inst', [

        ]);
    }
}
