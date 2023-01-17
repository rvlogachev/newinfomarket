<?php
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Блог'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category->title, 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => $model->seo_keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $model->seo_description]);

?>

<?php
/* @var $this yii\web\View */
/* @var $model common\models\Article */

?>


    <article class="blogpost full">
        <header>
            <h2>
                <a href="/blog/<?= $model->category->slug ;?>/<?= $model->slug ;?>"><?= $model->title;?></a>
            </h2>
            <div class="post-info">
                                            <span class="post-date">
                                                <?php echo Yii::$app->formatter->asDatetime($model->created_at) ?>
                                            </span>
                <span class="submitted"><i class="icon-user-1"></i> <a href="#"><?= $model->author->username;?></a></span>
                <script id="dsq-count-scr" src="//infomarket.disqus.com/count.js" async></script>
                <span class="comments"><i class="icon-chat"></i> <a id="commcnt" > </a></span>
            </div>
        </header>

        <div class="blogpost-content">


            <?php echo $model->body ?>
        </div>
        <footer class="clearfix">
            <!--noindex-->
            <div class="tags pull-left"><i class="icon-tags"></i>
                <?php \common\widgets\DNofollowWidget::begin([]); ?>
                <a href="/blog/<?= $model->category->slug ;?>"><?= $model->category->title;?></a>  <?= ($model->getTagsIm())? ' | '.$model->getTagsIm():'';?>
                <?php \common\widgets\DNofollowWidget::end(); ?>
            </div>
            <!--/noindex-->
            <div class="link pull-right">
                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                <script src="//yastatic.net/share2/share.js"></script>
                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,viber,whatsapp,skype,telegram" data-counter=""></div>


            </div>
        </footer>
    </article>

<div id="other_article">
    <div class="row">
<!--        <button type="button" id="clbtn" >aaaaa</button>-->
        <h3>
            Читайте также
        </h3><br>
    <?= \common\modules\widget\widgets\Articles\ArticlesWidget::widget(['type'=>'articles','id'=>$model->id]);?>
    </div>

</div>


<!--<form method="post" action="http://c1api.hypercomments.com/api/comments">-->
<!--    <input type="text" name="data" value='{"stream":"streamstart","widget_id":105016,"xid":"http://infomarketstudio.loc/blog/cat-boty/cat-boty-novaa-vozmoznost-interneta","limit":1,"filter":"all"}'>-->
<!--    <input type="submit">-->
<!--</form>-->



<div id="comments" class="comments">
    <?php if (!YII_DEBUG) { ?>
    <div id="hypercomments_widget" style="margin-top:20px"></div>
    <script type="text/javascript">
        _hcwp = window._hcwp || [];
        _hcwp.push({widget:"Stream", widget_id: 105016});
        (function() {
            if("HC_LOAD_INIT" in window)return;
            HC_LOAD_INIT = true;
            var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
            var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
            hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/105016/"+lang+"/widget.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hcc, s.nextSibling);
        })();
    </script>
<?php } ?>
</div>

