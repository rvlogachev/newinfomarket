<?php

namespace common\behaviors;

use common\commands\command\SendCommand;
use common\commands\command\SendEmailCommand;
use common\components\AccessUser;
use common\components\Cdek;
use common\components\Mobile_Detect;
use common\components\PostCalc;
use common\models\Clients;
use common\models\Delivery;
use common\models\Landings;
use common\models\MessagePlan;
use common\models\Order;
use common\models\Templates;
use common\models\TimelineEvent;
use console\controllers\SendMessageCommand;
use common\commands\command\SendSlackCommand;
use common\components\ActionsEvent;
use common\components\Browser;
use common\components\Helper;
use common\components\ipgeobase\IPGeoBase;
use common\components\Slack;
use common\models\AccessLog;
use common\models\GeoRegion;
use common\models\GeoRegionSearch;
use console\controllers\SendMessageController;

use direct\components\simple_html_dom;
use direct\components\simple_html_dom_node;
use direct\modules\direct\models\Task;
use yii\base\Behavior;
use Yii;
use yii\helpers\VarDumper;
use yii\web\Application;
use yii\web\HttpException;

/**
 * Class LocaleBehavior
 * @package common\behaviors
 */
class EventsBehavior extends Behavior
{


    public function init(){

        return parent::init();

    }

    public function events()
    {
        return [
             ActionsEvent::ADD_LEAD  => 'lead',    // Отправлена форма заказа
        ];
    }


    //Получено письмо с расчетом
    public function lead($event){

        $sentSuccess = Yii::$app->commandBus->handle(new SendCommand([
            'type' => 'new_lead',
            'body' => 'new_lead',
            'title' => 'Новый лид',
            'phone' => '',
            'email' => '',

            'order_id' => '',
            'data_send' => date("Y-m-d")
        ]));


    }

}