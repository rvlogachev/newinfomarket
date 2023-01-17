<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = \common\modules\widget\widgets\DbText::widget(['key' => 'seo.title.article.index']);
$this->registerMetaTag(['name' => 'keywords', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.keywords.article.index'])]);
$this->registerMetaTag(['name' => 'description', 'content' => \common\modules\widget\widgets\DbText::widget(['key' => 'seo.description.article.index'])]);
$this -> params['breadcrumbs'][] = $this -> title;

?>


    <h1 class="page-title"><?= $this->title?></h1>
    <p class="lead">Здесь вы можете почитать интересные новости рынка digital, узнать о наших новостях за чашечкой вкуснейшего капучино.</p>
    <div class="separator-2"></div>
<?php echo \yii\widgets\ListView::widget([
    'dataProvider'=>$dataProvider,
    'summary' => '<div  style="color:#CCC" class="pull-left">Показано {count} из {totalCount}</div><br><br>',
    'pager'=>[
        'hideOnSinglePage'=>true,
    ],
    'itemView'=>'_itemcatalog'
])?>