<?php
/**
 * Eugine Terentev <eugine@terentev.net>
 * @var $this \yii\web\View
 * @var $model \common\models\TimelineEvent
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
$this->title = Yii::t('backend', 'Application timeline');
$icons = [
    'user'=>'<i class="fa fa-user bg-blue"></i>'
];
?>





<?php
\yii\jui\Draggable::begin(['options' => ['id' => 'unscheduled' , 'class' => ['fc-event', 'future', 'remote'],
    'data' => ['location' => 'er', 'ticket' => 'erte']], 'clientOptions' => ['revert' => true, 'revertDuration' => 0, 'zIndex' => 999]]);
echo  "eeeeeeeeee";
\yii\jui\Draggable::end();
?>

<div class="direct-chat-messages">

</div>


<?php \yii\widgets\Pjax::begin() ?>
<div class="row">
    <div class="col-md-12">
        <?php if ($dataProvider->count > 0): ?>
            <ul class="timeline">
                <?php foreach($dataProvider->getModels() as $model): ?>
                    <?php if(!isset($date) || $date != Yii::$app->formatter->asDate($model->created_at)): ?>
                        <!-- timeline time label -->
                        <li class="time-label">
                            <span class="bg-blue">
                                <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
                            </span>
                        </li>
                        <?php $date = Yii::$app->formatter->asDate($model->created_at) ?>
                    <?php endif; ?>
                    <li>
                        <?php
                            try {
                                $viewFile = sprintf('%s/%s', $model->category, $model->event);
                                echo $this->render($viewFile, ['model' => $model]);
                            } catch (\yii\base\InvalidArgumentException $e) {
                                echo $this->render('_item', ['model' => $model]);
                            }
                        ?>
                    </li>
                <?php endforeach; ?>
                <li>
                    <i class="fa fa-clock-o">
                    </i>
                </li>
            </ul>
        <?php else: ?>
            <?php echo Yii::t('backend', 'No events found') ?>
        <?php endif; ?>
    </div>
    <div class="col-md-12 text-center">
        <?php echo \yii\widgets\LinkPager::widget([
            'pagination'=>$dataProvider->pagination,
            'options' => ['class' => 'pagination']
        ]) ?>
    </div>
</div>
<?php \yii\widgets\Pjax::end() ?>




<polyline points="10,10 30,390 80,200 100,390 180,390" stroke="#C00" stroke-width="5" stroke-linejoin="round" fill="none" />

<polygon points="350,75 379,161 469,161 397,215 423,301 350,250 277,301 303,215 231,161 321,161" stroke="#ff0" stroke-width="10" fill="#ff6" />