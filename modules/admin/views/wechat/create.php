<?php

use yii\helpers\Html;

$this->title = '创建公众号';
$this->params['breadcrumbs'][] = ['label' => '微信公众号', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wechat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
