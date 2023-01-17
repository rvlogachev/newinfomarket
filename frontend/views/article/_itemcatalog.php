<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Article
 */
use yii\helpers\Html;

?>

<!-- blogpost start -->
<article class="blogpost">
    <div id="carousel-blog-post" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators bottom margin-clear">
            <li data-target="#carousel-blog-post" data-slide-to="0" class="active"></li>

        </ol>
        <?php if ($model->getUploadUrl('image')) { ?>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div >
                        <?= Html::img($model->getUploadUrl('image'), ['class' => '  ']) ?>
                        <a  class='overlay-link' href="/blog/<?= $model->category->slug ;?>/<?= $model->slug ;?>"><i class="fa fa-link"></i></a>
                    </div>
                </div>

            </div>
        <?php } ?>

    </div>
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
            <span class="comments"><i class="icon-chat"></i> <a  id="commcnt">   </a></span>
        </div>
    </header>

    <div class="blogpost-content">
        <p><?php echo $model->short_body; ?></p>
    </div>
    <footer class="clearfix">
        <!--noindex-->
        <div class="tags pull-left"><i class="icon-tags"></i>
            <?php \common\widgets\DNofollowWidget::begin([]); ?>
                <a href="/blog/<?= $model->category->slug ;?>"><?= $model->category->title;?></a>  <?php // ($model->getTagsIm())? ' | '.$model->getTagsIm():'';?>
            <?php \common\widgets\DNofollowWidget::end(); ?>
        </div>
        <!--/noindex-->
        <div class="link pull-right"><i class="icon-link"></i>
            <a href="/blog/<?= $model->category->slug ;?>/<?= $model->slug ;?>">Подробнее</a>

        </div>
    </footer>
</article>
<!-- blogpost end -->









