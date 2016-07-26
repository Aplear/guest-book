<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">

        <h1>Join us!</h1>

        <p class="lead">You may send your message to everyone.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
        <?php
        if (Yii::$app->getSession()->hasFlash('error')) {
            echo '<div class="alert alert-danger">'.Yii::$app->getSession()->getFlash('error').'</div>';
        }
        ?>

        <p class="lead">Do you already have an account on one of these sites? Click the logo to log in with it here:</p>
        <?php echo \nodge\eauth\Widget::widget(['action' => 'site/login']); ?>
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="body-content">



    </div>
</div>
