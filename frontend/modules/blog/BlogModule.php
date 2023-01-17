<?php

namespace frontend\modules\blog;
use common\modules\blog\Module;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class BlogModule extends Module
{
    public $controllerNamespace = 'frontend\modules\blog\controllers\frontend';


    public function init()
    {
        parent::init();

        if ($this->getIsBackend() === true) {
            $this->setViewPath('@common/modules/blog/views/backend');
        } elseif (isset(Yii::$app->params['blogTheme'])) {
            $this->setViewPath('@frontend/themes/blog');
            $this->setLayoutPath('@frontend/themes/blog/layouts');
        } else {
            $this->setViewPath('@frontend/modules/blog/themes/default/views/frontend');
            $this->setLayoutPath('@frontend/modules/blog/themes/default/views/frontend/layouts');
        }
    }




}
