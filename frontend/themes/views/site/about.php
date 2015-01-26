<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code><br>
    <code><?= __DIR__ ?></code><br>
     @app= <?=\Yii::getAlias('@app')?><br>
     @webroot= <?=\Yii::getAlias('@webroot')?><br>
     @web= <?=\Yii::getAlias('@web')?><br>
     @frontend= <?=\Yii::getAlias('@frontend')?><br>
     @backend= <?=\Yii::getAlias('@backend')?><br>
     
     
</div>
