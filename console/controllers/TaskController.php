<?php

namespace console\controllers;


use backend\modules\benbot\Bot;
use common\modules\bot\components\telegram\Telegram;
use common\modules\bot\Request;
use common\commands\command\SendSocketCommand;
use common\commands\SendContentCommand;
use common\commands\SendQueueCommand;
use common\components\Helper;
use common\components\Xml2Array;
use common\models\Article;
use common\models\Clients;
use common\models\News;
use common\models\NewsSearch;
use common\models\Partners;
use common\models\ReadArticle;
use common\models\RssChanels;
use common\models\User;
use common\modules\blog\models\BlogCatalog;
use common\modules\blog\models\BlogPost;
use common\modules\bot\models\Conversation;
use yii\console\Controller;
use yii\httpclient\Client;

/**
 * @author Eugene Terentev <eugene@terentev.net>
 */
class TaskController extends Controller
{

    public function log($txt)
    {

        \Yii::info($txt, 'chat');
        $this->stdout($txt);

    }

    public function actionSendBot()
    {


        $con = Conversation::find()->where(['status' => 'active'])->all();
        foreach ($con as $item) {
            print_r(\GuzzleHttp\json_decode($item->notes));
        }


    }

    public function actionSuncRss()
    {
        $Keys = [];//
        $localsocket = "tcp://" . env('FRONTEND_DOMAIN') . ":1235";

        $blogCat = BlogCatalog::find()->where(['status'=>1])->all();
        foreach ($blogCat as $blogCatItem) {

            $Keys = explode(",", trim($blogCatItem->seo_keywords));

            print_r($Keys);

            $rss = RssChanels::find()->where(['status' => 1])->all();
            foreach ($rss as $itemRss) {
                $xmlStr = file_get_contents($itemRss->url);
                $array = xml2array::go($xmlStr, 1, 'attribute');

                if (isset($array['rss'])) {


                    foreach ($array['rss']['channel']['item'] as $item) {

                        if (isset($item['description']['value']) && mb_strlen($item['description']['value'])>1500) {

                            $des = strip_tags(trim($item['description']['value']));


                            echo "\r\nBlog id -".$blogCatItem->id." chanel id - ".$itemRss->id."\r\n";

                            print_r($item['title']['value']);
                            print_r($itemRss->url);
                            echo "\r\n \r\n";

                            \Yii::info(" title >>>> " . print_r($item, true), 'chat');


                            if(!empty($des)){

                                    foreach ($Keys as $t){

                                        $itemDess = $des;




                                        $pos = strpos(strtolower($itemDess), strtolower($t));

                                        if ($pos === false) {
                                            echo "????????????: {$t} ???? ?????????????? ?? ????????????: {$itemDess}\r\n\r\n";




                                        } else {



                                            print_r("\r\nBlog id -".$blogCatItem->id." chanel id - ".$itemRss->id." ??????????????????  -".$itemDess."==".$t."-");


                                            $message = $item['title']['value'];
                                            $instance = stream_socket_client($localsocket);
                                            $txtjson = \GuzzleHttp\json_encode(['type' => 'out', 'message' => $message]);
                                            \Yii::info('???????????????????? ?????????????? ', 'chat');

                                            // fwrite($instance, json_encode(['user' => $client->cookie, 'message' => $txtjson ])  . "\n");

                                            $sentSuccess = \Yii::$app->commandBus->handle(new SendSocketCommand([

                                                'message' => $txtjson,
                                                'user' => 'backend'
                                            ]));


                                            $model = BlogPost::find()->where(['title'=>substr($item['title']['value'],0,256)])->one();
                                            if(!$model){
                                                $model = new BlogPost();
                                                $model->detachBehavior('image');
                                                $model->title = substr($item['title']['value'],0,256);
                                                $model->content = strip_tags($item['description']['value']);
                                              //  $model->surname = $item['link']['value'];
                                                $model->status = 0;
                                                $model->tags = strtolower($t);
                                                $model->user_id = 1;
                                              //  $model->surname = $this->url_slug(substr($item['title']['value'],0,256));
                                                $model->catalog_id = $blogCatItem->id;


                                                if(isset($item['enclosure']['attr']['url'])){
                                                    print_r($item['enclosure']['attr']['url']);
                                                }
                                                print_r("Img end \r\n");



//                                            $path = Helper::saveFileUrl($item['enclosure']['attr']['url']);
///                                            print_r($path);
//                                            echo "\r\n";
//                                            $path = explode('source/', $path);
//                                            $model->thumbnail_base_url = 'https://infomarketstudio.ru/storage/web/source';
//                                            $model->thumbnail_path = $path[1];
                                                if (!$model->save()) {

                                                    print_r($model->getErrors());
                                                    \Yii::info("ERROR DB IMG method >>>> " . print_r($model->getErrors(), true), 'chat');
                                                    die;
                                                }
                                            }
                                        }






//                                        if(!empty($itemDess) && !empty($t) &&  strtolower($itemDess) == strtolower($t)){
//
//
//
//
//
//
//
//
//                                        }
                                    }

//
//                                        $tmp = $this->strpos_array($itemDess, $Keys);
//
//                                        if ($tmp) {
//
//                                            \Yii::info(" ADD title >>>> " . print_r($item, true), 'chat');
//
//                                        }




                              //  }


                            }
                        }






                        // echo $this->strpos_array($item['title']['value'], $Keys); // Output is 10
                        //print_r($item['title']['value']); echo "\r\n";
                        //  print_r($item['description']['value']); echo "\r\n";
//            $page = explode("p=", $item['guid']['value']);
//
//            if (isset($page[1])) {
//                $newsModel = Article::find()->where(['page' => $page[1]])->one();
//                if ($newsModel) {
//                    \Yii::info("title >>>> ??????????????!!! " . print_r($item, true), 'infostudiobot');
//                } else {
//                    \Yii::info(" ADD title >>>> " . print_r($item, true), 'infostudiobot');
////                    $model = new Article();
////
////                    $model->detachBehavior('image');
////
////                    $model->page = $page[1];
////                    $model->title = $item['title']['value'];
////                    $model->body = strip_tags($item['content:encoded']['value']);
////                    $model->view = $item['link']['value'];
////                    $model->status = 1;
////                    $model->avto = 2;
////                    $model->publish_vk = 1;
////                    $model->publish_fb = 1;
////                    $model->publish_viber = 1;
////                    $model->publish_telegram = 1;
////                    $model->publish_whatsapp = 1;
////                    $model->category_id = 1;
////                    $model->client_id = 6;
////
////
////                    $path = Helper::saveFileUrl($item['enclosure']['attr']['url']);
////
////                    $path = explode('source/',$path);
////
////                    $model->thumbnail_base_url = 'https://roztorbot.ru/storage/web/source';
////                    $model->thumbnail_path = $path[1];
////
////                    if (!$model->save()) {
////                        \Yii::info("method >>>> " . print_r($model->getErrors(), true), 'infostudiobot');
////                    }
//
//                }
//
//            }
                        // }


                    }
                }

            }
        }

    }

    function strpos_array($haystack, $needles)
    {
        if (is_array($needles)) {
            foreach ($needles as $str) {
                if (is_array($str)) {
                    $pos = $this->strpos_array($haystack, $str);
                } else {
                    $pos = strpos($haystack, $str);
                }
                if ($pos !== FALSE) {
                    return $pos;
                }
            }
        } else {
            return strpos($haystack, $needles);
        }
    }

    function url_slug($str, $options = array()) {
        // Make sure string is in UTF-8 and strip invalid UTF-8 characters
        $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());

        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => false,
        );

        // Merge options
        $options = array_merge($defaults, $options);

        $char_map = array(
            // Latin
            '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'AE', '??' => 'C',
            '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I',
            '??' => 'D', '??' => 'N', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O',
            '??' => 'O', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'Y', '??' => 'TH',
            '??' => 'ss',
            '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae', '??' => 'c',
            '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i',
            '??' => 'd', '??' => 'n', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o',
            '??' => 'o', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'y', '??' => 'th',
            '??' => 'y',
            // Latin symbols
            '??' => '(c)',
            // Greek
            '??' => 'A', '??' => 'B', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Z', '??' => 'H', '??' => '8',
            '??' => 'I', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => '3', '??' => 'O', '??' => 'P',
            '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'Y', '??' => 'F', '??' => 'X', '??' => 'PS', '??' => 'W',
            '??' => 'A', '??' => 'E', '??' => 'I', '??' => 'O', '??' => 'Y', '??' => 'H', '??' => 'W', '??' => 'I',
            '??' => 'Y',
            '??' => 'a', '??' => 'b', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'z', '??' => 'h', '??' => '8',
            '??' => 'i', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => '3', '??' => 'o', '??' => 'p',
            '??' => 'r', '??' => 's', '??' => 't', '??' => 'y', '??' => 'f', '??' => 'x', '??' => 'ps', '??' => 'w',
            '??' => 'a', '??' => 'e', '??' => 'i', '??' => 'o', '??' => 'y', '??' => 'h', '??' => 'w', '??' => 's',
            '??' => 'i', '??' => 'y', '??' => 'y', '??' => 'i',
            // Turkish
            '??' => 'S', '??' => 'I', '??' => 'C', '??' => 'U', '??' => 'O', '??' => 'G',
            '??' => 's', '??' => 'i', '??' => 'c', '??' => 'u', '??' => 'o', '??' => 'g',
            // Russian
            '??' => 'A', '??' => 'B', '??' => 'V', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Yo', '??' => 'Zh',
            '??' => 'Z', '??' => 'I', '??' => 'J', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => 'O',
            '??' => 'P', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U', '??' => 'F', '??' => 'H', '??' => 'C',
            '??' => 'Ch', '??' => 'Sh', '??' => 'Sh', '??' => '', '??' => 'Y', '??' => '', '??' => 'E', '??' => 'Yu',
            '??' => 'Ya',
            '??' => 'a', '??' => 'b', '??' => 'v', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'yo', '??' => 'zh',
            '??' => 'z', '??' => 'i', '??' => 'j', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => 'o',
            '??' => 'p', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u', '??' => 'f', '??' => 'h', '??' => 'c',
            '??' => 'ch', '??' => 'sh', '??' => 'sh', '??' => '', '??' => 'y', '??' => '', '??' => 'e', '??' => 'yu',
            '??' => 'ya',
            // Ukrainian
            '??' => 'Ye', '??' => 'I', '??' => 'Yi', '??' => 'G',
            '??' => 'ye', '??' => 'i', '??' => 'yi', '??' => 'g',
            // Czech
            '??' => 'C', '??' => 'D', '??' => 'E', '??' => 'N', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U',
            '??' => 'Z',
            '??' => 'c', '??' => 'd', '??' => 'e', '??' => 'n', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u',
            '??' => 'z',
            // Polish
            '??' => 'A', '??' => 'C', '??' => 'e', '??' => 'L', '??' => 'N', '??' => 'o', '??' => 'S', '??' => 'Z',
            '??' => 'Z',
            '??' => 'a', '??' => 'c', '??' => 'e', '??' => 'l', '??' => 'n', '??' => 'o', '??' => 's', '??' => 'z',
            '??' => 'z',
            // Latvian
            '??' => 'A', '??' => 'C', '??' => 'E', '??' => 'G', '??' => 'i', '??' => 'k', '??' => 'L', '??' => 'N',
            '??' => 'S', '??' => 'u', '??' => 'Z',
            '??' => 'a', '??' => 'c', '??' => 'e', '??' => 'g', '??' => 'i', '??' => 'k', '??' => 'l', '??' => 'n',
            '??' => 's', '??' => 'u', '??' => 'z'
        );

        // Make custom replacements
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);

        // Transliterate characters to ASCII
        if ($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }

        // Replace non-alphanumeric characters with our delimiter
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);

        // Remove duplicate delimiters
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);

        // Truncate slug to max. characters
        $str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');

        // Remove delimiter from ends
        $str = trim($str, $options['delimiter']);

        return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
    }


    public  function actionTest(){


        $bot = new \common\modules\bot\Bot('telegram');
        $data = [];
        $data['chat_id'] = 201378424;//'@chatbotbusiness'; //201378424;
        $data['text'] = "test";
        $data['parse_mode'] = 'HTML';
        $result = Request::sendMessage($data);



//        $lead = \Yii::$app->amocrm->lead;
//
//        $lead->debug(true); // ?????????? ??????????????
//        $lead['name'] = '???????? 89250111405';
//        // $lead['date_create'] = '-2 DAYS';
//
//
//        $lead['tags'] = ['infomarketstudio.ru'];
//     //   $lead['visitor_uid'] = '12345678-52d2-44c2-9e16-ba0052d9f6d6';
//
//
//        $idLead = $lead->apiAdd();
//        print_r($idLead);
//
//
//
//
//        $contact = \Yii::$app->amocrm->contact;
//        $contact->debug(true); // ?????????? ??????????????
//        $contact['name'] = '???????????? ???? ??????????';
//
//
//
//        $idContact = $contact->apiAdd();
//        print_r($idContact);
//
//        $link = \Yii::$app->amocrm->links;
//        $link['from'] = 'leads';
//        $link['from_id'] =$idLead;
//        $link['to'] = 'contacts';
//        $link['to_id'] =$idContact;
//        var_dump($link->apiLink());

    }
}
