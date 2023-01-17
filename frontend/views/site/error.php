<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
$this->params['breadcrumbs'][] = $this->title;
?>





<section class="main-container jumbotron light-gray-bg text-center margin-clear">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-6 col-md-offset-3 pv-40">
                <h1 class="page-title"><span class="text-default">404</span></h1>
                <h2><?php echo Html::encode($this->title) ?></h2>
                <p><?php echo nl2br(Html::encode($message)) ?></p>
                <form role="search">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Search">
                        <i class="fa fa-search form-control-feedback"></i>
                    </div>
                </form>
                <a href="/" class="btn btn-default btn-animated btn-lg">Вернуться на главную <i class="fa fa-home"></i></a>
            </div>
            <!-- main end -->

        </div>
    </div>
</section>



