<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Place */

$this->title = Yii::t('app', 'Create Place');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Places'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="place-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
